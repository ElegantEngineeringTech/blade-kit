<script setup lang="ts">
withDefaults(
    defineProps<{
        disabled?: boolean;
        checked?: boolean;
        required?: boolean;
        color?: string;
        type?: string;
    }>(),
    {
        disabled: false,
        checked: false,
        required: false,
        color: "emerald",
        type: "checkbox",
    },
);
</script>

<template>
    <input
        class="el-switch"
        :data-color="color"
        :type="type"
        :disabled="disabled"
        :checked="checked"
        :required="required"
    />
</template>
