<script setup lang="ts">
withDefaults(
    defineProps<{
        color?: string;
        size?: string;
    }>(),
    {
        color: "sky-light",
        size: "lg",
    },
);
</script>

<template>
    <div
        class="el-alert el-spacing el-text el-bg el-ring el-outline el-border el-shadow"
        :data-color="color"
        :data-size="size"
    >
        <span class="el-alert-icon -mx-1" v-if="$slots.icon">
            <slot name="icon"></slot>
        </span>

        <div>
            <slot></slot>
        </div>
    </div>
</template>
