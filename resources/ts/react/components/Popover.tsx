import {
    autoUpdate,
    flip,
    offset,
    shift,
    useDismiss,
    useFloating,
    useInteractions,
    useRole,
    type Placement,
} from "@floating-ui/react";
import { createFocusTrap, type FocusTrap } from "focus-trap";
import { createPortal } from "react-dom";
import { useEffect, useId, useRef, useState, type ReactNode } from "react";
import clsx from "clsx";

type RenderProps = {
    trigger: Record<string, unknown>;
    show: () => void;
    hide: () => void;
    toggle: () => void;
    open: boolean;
};
type PopoverProps = {
    children: (props: RenderProps) => ReactNode;
    popover: (props: Omit<RenderProps, "trigger">) => ReactNode;
    trap?: boolean;
    placement?: Placement;
    offset?: number;
    animation?: false | string;
    backdrop?: boolean;
    role?: "dialog" | "menu" | "tooltip" | "listbox";
    className?: string;
};

export default function Popover({
    children,
    popover,
    trap = true,
    placement: requestedPlacement = "bottom",
    offset: offsetValue = 4,
    animation = "default",
    backdrop = true,
    role = "dialog",
    className,
}: PopoverProps) {
    const id = useId();
    const [open, setOpen] = useState(false);
    const [floatingElement, setFloatingElement] = useState<HTMLDivElement | null>(null);
    const focusTrap = useRef<FocusTrap | null>(null);
    const floating = useFloating({
        open,
        onOpenChange: setOpen,
        placement: requestedPlacement,
        middleware: [offset(offsetValue), flip({ crossAxis: false }), shift()],
        whileElementsMounted: autoUpdate,
    });
    const dismiss = useDismiss(floating.context, { outsidePress: true, escapeKey: true });
    const roleProps = useRole(floating.context, { role });
    const { getReferenceProps, getFloatingProps } = useInteractions([dismiss, roleProps]);
    const setFloating = (element: HTMLDivElement | null) => {
        floating.refs.setFloating(element);
        setFloatingElement(element);
    };
    const show = () => setOpen(true);
    const hide = () => setOpen(false);
    const toggle = () => setOpen((value) => !value);

    useEffect(() => {
        if (!open) return;
        if (trap && floatingElement) {
            focusTrap.current = createFocusTrap(floatingElement, { allowOutsideClick: true });
            focusTrap.current.activate();
        }
        return () => {
            focusTrap.current?.deactivate();
        };
    }, [floatingElement, open, trap]);

    const triggerAttrs = getReferenceProps({
        ref: floating.refs.setReference,
        ...(role === "tooltip" ? { "aria-describedby": open ? id : undefined } : {}),
    });

    const renderProps = { trigger: triggerAttrs, show, hide, toggle, open };

    return (
        <>
            {children(renderProps)}
            {open &&
                createPortal(
                    <>
                        {backdrop && <div className="el-popover-backdrop" />}
                        <div
                            ref={setFloating}
                            className={clsx("el-popover", className)}
                            id={id}
                            role={role}
                            {...getFloatingProps()}
                            style={floating.floatingStyles}
                            data-placement={floating.placement}
                            data-animation={animation || undefined}
                        >
                            {popover({ show, hide, toggle, open })}
                        </div>
                    </>,
                    document.body,
                )}
        </>
    );
}
