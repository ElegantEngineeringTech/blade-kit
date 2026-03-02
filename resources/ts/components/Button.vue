<script setup lang="ts">
import { computed } from "vue";
import ButtonBadge from "./ButtonBadge.vue";
import ButtonIcon from "./ButtonIcon.vue";

const props = withDefaults(
    defineProps<{
        tag?: string;
        type?: string;
        size?: string;
        color?: string;
        colorChecked?: string;
        disabled?: boolean;
        loading?: boolean;
        download?: boolean | string;
        tooltip?: string;
        offset?: boolean;
        badge?: number;
    }>(),
    {
        size: "base",
        offset: true,
        disabled: false,
        loading: false,
    },
);

const slots = defineSlots<{
    default?(props: {}): any;
    before?(props: {}): any;
    input?(props: {}): any;
    icon?(props: {}): any;
    "icon-right"?(props: {}): any;
    loader?(props: {}): any;
    after?(props: {}): any;
}>();

const computedTag = computed(() => {
    if (props.tag) return props.tag;
    if (slots.input) return "label";
    return "button";
});

const computedType = computed(() => {
    if (props.type) return props.type;
    if (props.tag === "button") return "button";
    return null;
});
</script>

<template>
    <component
        :is="computedTag"
        class="el-button el-spacing el-text el-bg el-ring el-outline el-border"
        :data-size="size"
        :data-color="color"
        :data-color-checked="colorChecked"
        :disabled="disabled || null"
        :type="computedType"
        :download="download || null"
        :data-loading="loading || null"
    >
        <slot name="before" />
        <slot name="input" />

        <ButtonIcon v-if="slots.icon" :offset="offset" :badge="badge">
            <slot name="icon" />
        </ButtonIcon>

        <span
            v-if="slots.default"
            class="relative inline-flex min-w-0"
            :class="{
                'ml-2': slots.icon && offset,
                'mr-2': slots['icon-right'] && offset,
            }"
        >
            <slot />
            <ButtonBadge v-if="!slots.icon && badge" :count="badge" />
        </span>

        <ButtonIcon v-if="slots['icon-right']" :offset="offset">
            <slot name="icon-right" />
        </ButtonIcon>

        <span class="el-loader">
            <span
                class="animate-spin-loader size-4 rounded-full border-2 border-current border-r-transparent border-t-transparent"
            ></span>
            <slot name="loader" />
        </span>

        <slot name="after" />
    </component>
</template>
