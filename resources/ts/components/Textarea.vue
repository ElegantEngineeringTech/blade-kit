<script setup lang="ts">
import { computed, onMounted, ref, useTemplateRef } from 'vue';


const props = withDefaults(defineProps<{
    rows?: number,
    size?: string,
    color?: string,
    autocomplete?: string,
    spellcheck?: boolean,
    autosized?: boolean,
}>(), {
    rows: 1,
    size: 'base',
    autocomplete: 'off',
    spellcheck: true,
    autosized: false,
});

const autocompleteAttributes = computed(() => {
    if (props.autocomplete === 'off') {
        return {
            'autocomplete': 'off',
            'data-1p-ignore': true,
            'data-bwignore': true,
            'data-lpignore': 'true',
            'data-form-type': 'other'
        };
    }
    return {
        'autocomplete': props.autocomplete,
    };
});

const autosizedNative = ref(false);

const minHeight = ref(0);

const textarea = useTemplateRef('textarea');

function resize() {
    if (textarea.value) {
        textarea.value.style.height = `${minHeight}px`;
        textarea.value.style.height = `${textarea.value.scrollHeight}px`;
    }
}

const attributes = computed(() => {
    return autocompleteAttributes.value;
});

const listeners = computed(() => {
    if (props.autosized && !autosizedNative.value) {
        return { input: resize };
    }

    return {};
});

onMounted(() => {
    autosizedNative.value = CSS.supports('field-sizing: content');

    if (props.autosized && !autosizedNative.value) {
        minHeight.value = textarea.value?.getBoundingClientRect().height ?? 0;

        resize();
    }
});
</script>

<template>
    <textarea ref="textarea" class="el-textarea el-text el-spacing el-bg el-outline" :data-size="size"
        :data-color="color" :autosized="autosized" :spellcheck="spellcheck" v-bind="attributes" v-on="listeners" />
</template>
