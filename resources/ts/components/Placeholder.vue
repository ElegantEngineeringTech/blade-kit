<script setup lang="ts">
defineProps<{
    label?: string;
}>();
</script>

<template>
    <div class="p-4 border rounded bg-white shadow">
        <h3 class="text-lg font-bold">Blade Kit Vue Component</h3>
        <p v-if="label">{{ label }}</p>
        <slot />
    </div>
</template>
