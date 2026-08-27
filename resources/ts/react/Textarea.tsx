import { useEffect, useRef, useState, type ComponentProps } from "react";
import clsx from "clsx";
type TextareaProps = Omit<ComponentProps<"textarea">, "size"> & {
    rows?: number;
    size?: string;
    color?: string;
    autocomplete?: string;
    autosized?: boolean;
};
export default function Textarea({
    rows = 1,
    size = "base",
    color,
    autocomplete = "off",
    spellCheck = true,
    autosized = false,
    onInput,
    className,
    ...props
}: TextareaProps) {
    const textarea = useRef<HTMLTextAreaElement>(null);
    const [native, setNative] = useState(false);
    const resize = () => {
        if (textarea.current) {
            textarea.current.style.height = "0px";
            textarea.current.style.height = `${textarea.current.scrollHeight}px`;
        }
    };
    useEffect(() => {
        const supports = typeof CSS !== "undefined" && CSS.supports("field-sizing: content");
        setNative(supports);
        if (autosized && !supports) resize();
    }, [autosized]);
    return (
        <textarea
            {...props}
            {...{ autosized: autosized || undefined }}
            ref={textarea}
            className={clsx(
                "el-textarea el-spacing el-text el-bg el-ring el-outline el-border",
                className,
            )}
            data-size={size}
            data-color={color}
            rows={rows}
            spellCheck={spellCheck}
            autoComplete={autocomplete}
            data-1p-ignore={autocomplete === "off" || undefined}
            data-bwignore={autocomplete === "off" || undefined}
            data-lpignore={autocomplete === "off" ? "true" : undefined}
            data-form-type={autocomplete === "off" ? "other" : undefined}
            onInput={(event) => {
                if (autosized && !native) resize();
                onInput?.(event);
            }}
        />
    );
}
