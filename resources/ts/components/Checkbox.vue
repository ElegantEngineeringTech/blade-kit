<script setup lang="ts">
withDefaults(
    defineProps<{
        type?: string;
    }>(),
    {
        type: "checkbox",
    },
);
</script>

<template>
    <input class="el-checkbox" :type="type" />
</template>
