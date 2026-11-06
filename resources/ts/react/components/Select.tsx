import type { ComponentProps } from "react";
import clsx from "clsx";

type SelectProps = Omit<ComponentProps<"select">, "size"> & { size?: string; color?: string };
export default function Select({
    size = "base",
    color = "white",
    className,
    ...props
}: SelectProps) {
    return (
        <select
            {...props}
            className={clsx("el-select el-text el-bg el-outline el-ring", className)}
            data-size={size}
            data-color={color}
        />
    );
}
