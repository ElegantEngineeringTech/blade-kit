<script setup lang="ts">
import InputIcon from "./InputIcon.vue";

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
    <div
        class="el-input el-text el-bg el-outline el-border el-ring"
        :data-size="size"
        :data-color="color"
    >
        <slot name="start"></slot>

        <div class="relative flex min-w-0 grow">
            <InputIcon v-if="$slots.icon">
                <slot name="icon"></slot>
            </InputIcon>

            <slot>
                <input type="text" />
            </slot>

            <InputIcon v-if="$slots['icon-right']">
                <slot name="icon-right"></slot>
            </InputIcon>
        </div>

        <slot name="end"></slot>
    </div>
</template>
