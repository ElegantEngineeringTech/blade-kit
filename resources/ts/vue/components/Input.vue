<script setup lang="ts">
withDefaults(
    defineProps<{
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
    <input
        class="el-input el-text el-bg el-ring el-outline el-border"
        :data-color="color"
        :data-size="size"
    />
</template>
