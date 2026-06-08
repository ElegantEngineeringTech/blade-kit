<script setup lang="ts">
import TagIcon from "./TagIcon.vue";

const props = withDefaults(
    defineProps<{
        tag?: string;
        type?: string;
        size?: string;
        color?: string;
        offset?: boolean;
        truncate?: boolean;
    }>(),
    {
        tag: "span",
        size: "2xs",
        offset: true,
        truncate: false,
    },
);

const slots = defineSlots<{
    default?(props: {}): any;
    icon?(props: {}): any;
    "icon-right"?(props: {}): any;
    button?(props: {}): any;
}>();
</script>

<template>
    <component
        :is="tag"
        class="el-tag el-spacing el-text el-bg el-ring el-outline el-border el-shadow"
        :data-size="size"
        :data-color="color"
    >
        <TagIcon v-if="slots.icon" :offset="offset">
            <slot name="icon" />
        </TagIcon>

        <span
            v-if="slots.default"
            class="el-tag-content"
            :class="{
                truncate: truncate,
                'ml-2': slots.icon && offset,
                'mr-2': slots['icon-right'] && offset,
            }"
        >
            <slot />
        </span>

        <TagIcon v-if="slots['icon-right']" :offset="offset">
            <slot name="icon-right" />
        </TagIcon>

        <span v-if="slots.button" class="el-tag-button">
            <slot name="button" />
        </span>
    </component>
</template>
