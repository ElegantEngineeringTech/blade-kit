<script setup lang="ts">
import ButtonBadge from "./ButtonBadge.vue";

withDefaults(
    defineProps<{
        offset?: boolean;
        badge?: number;
    }>(),
    {
        offset: false,
    },
);
</script>

<template>
    <span class="el-button-icon" :class="{ '-mx-1': offset }">
        <slot />
        <ButtonBadge v-if="badge" :count="badge" />
    </span>
</template>
