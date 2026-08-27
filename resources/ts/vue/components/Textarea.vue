<script setup lang="ts">
import { computed, onMounted, ref, useTemplateRef } from "vue";

const props = withDefaults(
    defineProps<{
        rows?: number;
        size?: string;
        color?: string;
        autocomplete?: string;
        spellcheck?: boolean;
        autosized?: boolean;
    }>(),
    {
        rows: 1,
        size: "base",
        autocomplete: "off",
        spellcheck: true,
        autosized: false,
    },
);

const model = defineModel({ default: "" });

const autosizedNative = ref(false);

const minHeight = ref(0);

const textarea = useTemplateRef("textarea");

const autocompleteAttributes = computed(() => {
    if (props.autocomplete === "off") {
        return {
            autocomplete: "off",
            "data-1p-ignore": true,
            "data-bwignore": true,
            "data-lpignore": "true",
            "data-form-type": "other",
        };
    }
    return {
        autocomplete: props.autocomplete,
    };
});

function resize() {
    if (textarea.value) {
        textarea.value.style.height = `${minHeight.value}px`;
        textarea.value.style.height = `${textarea.value.scrollHeight}px`;
    }
}

const listeners = computed(() => {
    if (props.autosized && !autosizedNative.value) {
        return { input: resize };
    }

    return {};
});

onMounted(() => {
    autosizedNative.value = CSS.supports("field-sizing: content");

    if (props.autosized && !autosizedNative.value) {
        minHeight.value = textarea.value?.getBoundingClientRect().height ?? 0;

        resize();
    }
});
</script>

<template>
    <textarea
        ref="textarea"
        class="el-textarea el-spacing el-text el-bg el-ring el-outline el-border"
        :data-size="size"
        :data-color="color"
        :rows="rows"
        :autosized="autosized"
        :spellcheck="spellcheck"
        v-bind="autocompleteAttributes"
        v-on="listeners"
        v-model="model"
    />
</template>
