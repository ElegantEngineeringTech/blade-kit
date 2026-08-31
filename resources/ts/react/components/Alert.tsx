import type { ComponentProps, ReactNode } from "react";
import clsx from "clsx";

type AlertProps = ComponentProps<"div"> & { color?: string; size?: string; icon?: ReactNode };

export default function Alert({
    color = "sky-light",
    size = "lg",
    icon,
    children,
    className,
    ...props
}: AlertProps) {
    return (
        <div
            {...props}
            className={clsx(
                "el-alert el-spacing el-text el-bg el-ring el-outline el-border el-shadow",
                className,
            )}
            data-color={color}
            data-size={size}
        >
            {icon && <span className="el-alert-icon -mx-1">{icon}</span>}
            {children}
        </div>
    );
}
