<script setup lang="ts">
import { computed, ref, toValue, type MaybeRefOrGetter } from "vue";
import Button from "./Button.vue";
import Tooltip from "./Tooltip.vue";

defineOptions({
    inheritAttrs: false,
});

const props = defineProps<{
    copy?: MaybeRefOrGetter<string>;
}>();

const slots = defineSlots<{
    default?(props: {}): any;
    icon?(props: {}): any;
    "icon-right"?(props: {}): any;
    "tooltip"?(props: {}): any;
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
</script>

<template>
    <Tooltip>
        <template v-slot:default="{ trigger }">
            <Button v-bind="{ ...trigger, ...$attrs }" v-on:click="onCopy">
                <template v-slot:icon v-if="slots.icon">
                    <slot :copied="copied" name="icon"></slot>
                </template>

                <template v-slot:icon-right v-if="slots['icon-right']">
                    <slot :copied="copied" name="icon-right"></slot>
                </template>

                <slot></slot>
            </Button>
        </template>
        <template v-slot:tooltip v-if="slots.tooltip">
            <slot :copied="copied" name="tooltip"></slot>
        </template>
    </Tooltip>
</template>
