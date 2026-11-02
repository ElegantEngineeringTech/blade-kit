<script setup lang="ts">
import { computed } from "vue";

const props = withDefaults(
    defineProps<{
        count?: number;
        max?: number;
        color?: string;
        label?: string;
    }>(),
    {
        count: 0,
        max: 99,
        color: "rose",
    },
);

const computedCount = computed(() => {
    if (props.count > props.max) return `${props.max}+`;
    if (props.count < -props.max) return `-${props.max}+`;
    if (props.count > 1 || props.count < 0) return props.count;
    return null;
});
</script>

<template>
    <span
        :class="{
            'el-badge el-text el-bg el-outline': true,
            'h-5 min-w-5 px-0.5': computedCount !== null,
            'size-3': computedCount === null,
        }"
        :data-color="color"
    >
        <span v-if="computedCount !== null" :aria-hidden="label ? 'true' : undefined">
            {{ computedCount }}
        </span>
        <span v-if="label" class="sr-only">{{ label }}</span>
    </span>
</template>
