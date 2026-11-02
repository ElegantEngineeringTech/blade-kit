import clsx from "clsx";
import { useMemo, type ComponentProps } from "react";

type BadgeProps = ComponentProps<"span"> & {
    count?: number;
    max?: number;
    color?: string;
    label?: string;
};

export default function Badge({
    count = 0,
    max = 99,
    color = "rose",
    label,
    className,
    ...props
}: BadgeProps) {
    const computedCount = useMemo(() => {
        if (count > max) return `${max}+`;
        if (count < -max) return `-${max}+`;
        if (count > 1 || count < 0) return count;
        return null;
    }, [count, max]);

    return (
        <span
            {...props}
            className={clsx(
                "el-badge el-text el-bg el-outline",
                computedCount !== null ? "h-5 min-w-5 px-0.5" : "size-3",
                className,
            )}
            data-color={color}
        >
            {computedCount !== null && (
                <span aria-hidden={label ? true : undefined}>{computedCount}</span>
            )}
            {label && <span className="sr-only">{label}</span>}
        </span>
    );
}
