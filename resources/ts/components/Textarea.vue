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

const native = ref(CSS.supports('field-sizing: content'));

const minHeight = ref(0);

const textarea = useTemplateRef('textarea');

function resize() {
    if (native.value === false && textarea.value) {
        textarea.value.style.height = `${minHeight}px`;
        textarea.value.style.height = `${textarea.value.scrollHeight}px`;
    }
}

const attributes = computed(() => {
    return autocompleteAttributes.value;
});

const listeners = computed(() => {
    return native.value ? {} : { input: resize };
});

onMounted(() => {
    if (native.value === false) {
        minHeight.value = textarea.value?.getBoundingClientRect().height ?? 0;

        resize();
    }
});
</script>

<template>
    <textarea ref="textarea" class="el-textarea el-text el-spacing el-bg el-outline" :data-size="size"
        :data-color="color" :autosized="autosized" :spellcheck="spellcheck" v-bind="attributes" v-on="listeners" />
</template>
