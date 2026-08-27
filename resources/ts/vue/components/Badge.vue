<script setup lang="ts">
import { computed } from "vue";

const props = withDefaults(
    defineProps<{
        count?: number;
        max?: number;
        color?: string;
    }>(),
    {
        count: 0,
        max: 99,
        color: "rose",
    },
);

const computedCount = computed(() => {
    return props.count > 1 ? Math.min(props.count, props.max) : null;
});
</script>

<template>
    <span
        :class="{
            'el-badge el-text el-bg el-outline': true,
            'size-5': count > 1,
            'size-3': count <= 1,
        }"
        :data-color="color"
    >
        {{ computedCount }}
    </span>
</template>
