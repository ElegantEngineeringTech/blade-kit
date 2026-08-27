<script setup lang="ts">
withDefaults(
    defineProps<{
        disabled?: boolean;
        required?: boolean;
        size?: string;
        color?: string;
    }>(),
    {
        size: "base",
        color: "white",
    },
);
</script>

<template>
    <select
        class="el-select el-text el-bg el-outline el-ring"
        :data-size="size"
        :data-color="color"
        :disabled="disabled || undefined"
        :required="required || undefined"
    >
        <slot></slot>
    </select>
</template>
