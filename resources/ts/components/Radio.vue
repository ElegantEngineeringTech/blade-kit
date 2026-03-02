<script setup lang="ts">
withDefaults(defineProps<{
  disabled?: boolean;
  checked?: boolean;
  required?: boolean;
  type?: string;
}>(), {
  disabled: false,
  checked: false,
  required: false,
  type: 'radio',
});
</script>

<template>
  <input class="el-radio" :type="type" :disabled="disabled" :checked="checked" :required="required" />
</template>
