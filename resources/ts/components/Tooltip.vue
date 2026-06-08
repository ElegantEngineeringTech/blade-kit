<script setup lang="ts">
import { computed } from "vue";

import Popover from "./Popover.vue";
import { type Placement } from "@floating-ui/vue";

const props = withDefaults(
    defineProps<{
        trap?: boolean;
        placement?: Placement;
    }>(),
    {
        trap: false,
        placement: "top",
    },
);

const open = defineModel({
    default: false,
});

const triggerAttrs = computed(() => ({
    //...
}));
</script>

<template>
    <Popover v-model="open" :trap="trap" :placement="placement" class="el-tooltip">
        <template v-slot:default="{ show, hide, trigger }">
            <slot
                :trigger="{
                    ...triggerAttrs,
                    ...trigger,
                    onMouseenter: show,
                    onMouseleave: hide,
                    onFocus: show,
                    onBlur: hide,
                }"
                :show="show"
                :hide="hide"
            ></slot>
        </template>

        <template v-slot:popover>
            <slot name="tooltip"></slot>
        </template>
    </Popover>
</template>
