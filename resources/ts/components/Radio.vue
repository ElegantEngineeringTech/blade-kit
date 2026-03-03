<script setup lang="ts">
withDefaults(
    defineProps<{
        type?: string;
    }>(),
    {
        type: "radio",
    },
);
</script>

<template>
    <input class="el-radio" :type="type" />
</template>
