<script setup lang="ts">
withDefaults(
    defineProps<{
        offset?: boolean;
    }>(),
    {
        offset: false,
    },
);
</script>

<template>
    <span class="el-tag-icon" :class="{ '-mx-1': offset }">
        <slot />
    </span>
</template>
