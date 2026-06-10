<script setup lang="ts">
import {
    type ComponentPublicInstance,
    computed,
    type MaybeRefOrGetter,
    nextTick,
    ref,
    Teleport,
    toValue,
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
        trap?: MaybeRefOrGetter<UseFocusTrapOptions | boolean>;
        placement?: MaybeRefOrGetter<Placement>;
        offset?: MaybeRefOrGetter<OffsetOptions>;
        flip?: MaybeRefOrGetter<FlipOptions>;
        shift?: MaybeRefOrGetter<ShiftOptions>;
        animation?: MaybeRefOrGetter<false | string>;
    }>(),
    {
        trap: true,
        offset: 4,
        placement: "bottom",
        animation: "default",
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

const middleware = computed(() => [
    offset(toValue(props.offset)),
    flip({
        crossAxis: false,
        ...toValue(props.flip),
    }),
    shift(toValue(props.shift)),
]);

const { isPositioned, floatingStyles, placement } = useFloating(trigger, floating, {
    middleware: middleware,
    whileElementsMounted: autoUpdate,
    open: open,
    placement: props.placement,
});

const setTrigger = (el: Element | ComponentPublicInstance | null) => {
    trigger.value = el;
};

watch(isPositioned, (value) => {
    if (toValue(props.trap)) {
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
    <slot :trigger="triggerAttrs" :show="show" :hide="hide" :toggle="toggle" :open="open"></slot>

    <Teleport to="body">
        <div v-if="open" class="el-popover-backdrop"></div>
        <div
            v-if="open"
            v-bind="$attrs"
            :style="floatingStyles"
            ref="floating"
            class="el-popover"
            :data-placement="placement"
            :data-animation="animation || undefined"
        >
            <slot name="popover" :show="show" :hide="hide" :toggle="toggle" :open="open"></slot>
        </div>
    </Teleport>
</template>
