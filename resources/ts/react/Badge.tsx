import clsx from "clsx";
import type { ComponentProps } from "react";

type BadgeProps = ComponentProps<"span"> & {
    count?: number;
    max?: number;
    color?: string;
};

export default function Badge({
    count = 0,
    max = 99,
    color = "rose",
    className,
    ...props
}: BadgeProps) {
    const computedCount = count > 1 ? Math.min(count, max) : null;

    return (
        <span
            {...props}
            className={clsx(
                "el-badge el-text el-bg el-outline",
                count > 1 ? "size-5" : "size-3",
                className,
            )}
            data-color={color}
        >
            {computedCount}
        </span>
    );
}
