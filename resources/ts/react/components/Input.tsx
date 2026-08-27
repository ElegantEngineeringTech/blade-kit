import type { ComponentProps } from "react";
import clsx from "clsx";

type InputProps = ComponentProps<"input"> & { size?: string; color?: string };

export default function Input({ size = "base", color = "white", className, ...props }: InputProps) {
    return (
        <input
            {...props}
            className={clsx("el-input el-text el-bg el-ring el-outline el-border", className)}
            data-color={color}
            data-size={size}
        />
    );
}
