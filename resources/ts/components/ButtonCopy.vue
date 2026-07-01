<script setup lang="ts">
import { computed, ref, toValue, type MaybeRefOrGetter } from "vue";
import Button from "./Button.vue";
import Tooltip from "./Tooltip.vue";

defineOptions({
    inheritAttrs: false,
});

const props = defineProps<{
    copy?: MaybeRefOrGetter<string>;
    tooltip?: MaybeRefOrGetter<string>;
    tooltipCopied?: MaybeRefOrGetter<string>;
}>();

const slots = defineSlots<{
    default?(props: {}): any;
    icon?(props: {}): any;
    "icon-right"?(props: {}): any;
    "icon-copied"?(props: {}): any;
}>();

const copied = ref(false);

function onCopy() {
    const value = toValue(props.copy);

    if (value) {
        copied.value = true;

        setTimeout(() => {
            copied.value = false;
        }, 2_000);

        navigator.clipboard.writeText(value); // require https
    }
}

const tooltipValue = computed(() => toValue(props.tooltip));
const tooltipCopiedValue = computed(() => toValue(props.tooltipCopied));
</script>

<template>
    <Tooltip>
        <template v-slot:default="{ trigger }">
            <Button v-bind="{ ...trigger, ...$attrs }" v-on:click="onCopy">
                <template v-slot:icon v-if="slots.icon || slots['icon-right']">
                    <span>
                        <slot v-show="copied" name="icon-copied"></slot>
                        <slot v-show="!copied" name="icon"></slot>
                    </span>
                </template>

                <slot></slot>
            </Button>
        </template>
        <template v-slot:tooltip v-if="tooltipValue || tooltipCopiedValue">
            <span v-show="copied" v-html="tooltipCopiedValue"></span>
            <span v-show="!copied" v-html="tooltipValue"></span>
        </template>
    </Tooltip>
</template>
