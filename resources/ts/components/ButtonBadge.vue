<script setup lang="ts">
import Badge from './Badge.vue';

withDefaults(defineProps<{
  count?: number;
}>(), {
  count: 0,
});

</script>

<template>
  <Badge class="absolute -right-1 -top-1" :count="count" />
</template>