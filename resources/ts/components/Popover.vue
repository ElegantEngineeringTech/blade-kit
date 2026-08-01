<script setup lang="ts">
import {
    type ComponentPublicInstance,
    computed,
    type MaybeRefOrGetter,
    nextTick,
    ref,
    Teleport,
    toValue,
    useId,
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
import { useFocusTrap } from "@vueuse/integrations/useFocusTrap";

defineOptions({
    inheritAttrs: false,
});

const props = withDefaults(
    defineProps<{
        trap?: MaybeRefOrGetter<boolean>;
        placement?: MaybeRefOrGetter<Placement>;
        offset?: MaybeRefOrGetter<OffsetOptions>;
        flip?: MaybeRefOrGetter<FlipOptions>;
        shift?: MaybeRefOrGetter<ShiftOptions>;
        animation?: MaybeRefOrGetter<false | string>;
        backdrop?: MaybeRefOrGetter<boolean>;
        role?: "dialog" | "menu" | "tooltip" | "listbox";
    }>(),
    {
        trap: true,
        offset: 4,
        placement: "bottom",
        animation: "default",
        backdrop: true,
        role: "dialog",
    },
);

const id = useId();

const open = defineModel<boolean>({
    default: false,
});

const trap = computed(() => toValue(props.trap));
const backdrop = computed(() => toValue(props.backdrop));
const animation = computed(() => toValue(props.animation));

const middleware = computed(() => [
    offset(toValue(props.offset)),
    flip({
        crossAxis: false,
        ...toValue(props.flip),
    }),
    shift(toValue(props.shift)),
]);

const trigger = ref<Element | ComponentPublicInstance | null>(null);

const floating = useTemplateRef("floating");

const { activate, deactivate } = useFocusTrap(floating, {
    allowOutsideClick: true,
});

const { isPositioned, floatingStyles, placement } = useFloating(trigger, floating, {
    middleware: middleware,
    whileElementsMounted: autoUpdate,
    open: open,
    placement: () => toValue(props.placement),
});

const setTrigger = (el: Element | ComponentPublicInstance | null) => {
    trigger.value = el;
};

watch([isPositioned, trap], ([value, trap], [oldValue, oldTrap]) => {
    if (trap) {
        if (value) {
            nextTick(() => activate());
        } else {
            nextTick(() => deactivate());
        }
    } else if (oldTrap) {
        nextTick(() => deactivate());
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

const triggerAttrs = computed(() => {
    if (props.role === "tooltip") {
        return {
            ref: setTrigger,
            "aria-describedby": open.value ? id : undefined,
        };
    }

    const attrs = {
        ref: setTrigger,
        "aria-haspopup": props.role,
        "aria-expanded": open.value,
        "aria-controls": id,
    };

    if (trap.value) {
        return attrs;
    }

    return {
        ...attrs,
        onKeydown: (e: KeyboardEvent) => {
            if (e.key === "Escape") {
                e.preventDefault();
                hide();
            }
        },
    };
});

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
        <div v-if="backdrop && open" class="el-popover-backdrop"></div>
        <div
            v-if="open"
            ref="floating"
            class="el-popover"
            v-bind="$attrs"
            :id="id"
            :role="role"
            :style="floatingStyles"
            :data-placement="placement"
            :data-animation="animation || undefined"
            v-on:keydown.escape.prevent="hide"
        >
            <slot name="popover" :show="show" :hide="hide" :toggle="toggle" :open="open"></slot>
        </div>
    </Teleport>
</template>
