<script setup lang="ts">
import {
    type ComponentPublicInstance,
    computed,
    nextTick,
    ref,
    Teleport,
    useTemplateRef,
    watch,
} from "vue";
import {
    autoUpdate,
    flip,
    type FlipOptions,
    offset,
    type OffsetOptions,
    type Placement,
    shift,
    type ShiftOptions,
    useFloating,
} from "@floating-ui/vue";
import { onClickOutside } from "@vueuse/core";
import { useFocusTrap, type UseFocusTrapOptions } from "@vueuse/integrations/useFocusTrap";

defineOptions({
    inheritAttrs: false,
});

const props = withDefaults(
    defineProps<{
        trap?: boolean | UseFocusTrapOptions;
        placement?: Placement;
        offset?: OffsetOptions;
        flip?: FlipOptions;
        shift?: ShiftOptions;
    }>(),
    {
        trap: true,
        offset: 4,
        placement: "bottom",
    },
);

const open = defineModel({
    default: false,
});

const trigger = ref<Element | ComponentPublicInstance | null>(null);

const floating = useTemplateRef("floating");

const { activate, deactivate } = useFocusTrap(floating, {
    allowOutsideClick: true,
});

const { isPositioned, floatingStyles } = useFloating(trigger, floating, {
    middleware: [offset(props.offset), flip(props.flip), shift(props.shift)],
    whileElementsMounted: autoUpdate,
    open: open,
    placement: props.placement,
});

const setTrigger = (el: Element | ComponentPublicInstance | null) => {
    trigger.value = el;
};

watch(isPositioned, (value) => {
    if (props.trap) {
        if (value) {
            nextTick(() => activate());
        } else {
            nextTick(() => deactivate());
        }
    }
});

function show() {
    open.value = true;
}
function hide() {
    open.value = false;
}
function toggle() {
    if (open.value) {
        hide();
    } else {
        show();
    }
}

const triggerAttrs = computed(() => ({
    ref: setTrigger,
}));

const triggerElement = computed(() => {
    if (trigger.value === null) {
        return undefined;
    }

    if (trigger.value instanceof HTMLElement) {
        return trigger;
    }

    if ("$el" in trigger.value) {
        return trigger.value.$el;
    }

    return null;
});

onClickOutside(
    floating,
    (e) => {
        hide();
    },
    {
        ignore: [triggerElement],
    },
);
</script>

<template>
    <slot :trigger="triggerAttrs" :show="show" :hide="hide" :toggle="toggle"></slot>

    <Teleport to="body">
        <div v-if="open" v-bind="$attrs" :style="floatingStyles" ref="floating" class="el-popover">
            <slot name="popover" :show="show" :hide="hide" :toggle="toggle"></slot>
        </div>
    </Teleport>
</template>
