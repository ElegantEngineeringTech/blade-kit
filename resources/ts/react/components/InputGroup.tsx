import type { ComponentProps, ReactNode } from "react";
import clsx from "clsx";
import InputIcon from "./InputIcon";

type InputGroupProps = ComponentProps<"div"> & {
    size?: string;
    color?: string;
    start?: ReactNode;
    icon?: ReactNode;
    iconRight?: ReactNode;
    end?: ReactNode;
};

export default function InputGroup({
    size = "base",
    color = "white",
    start,
    icon,
    iconRight,
    end,
    children,
    className,
    ...props
}: InputGroupProps) {
    return (
        <div
            {...props}
            className={clsx("el-input el-text el-bg el-outline el-border el-ring", className)}
            data-size={size}
            data-color={color}
        >
            {start}
            <div className="relative flex min-w-0 grow">
                {icon && <InputIcon>{icon}</InputIcon>}
                {children ?? <input type="text" />}
                {iconRight && <InputIcon>{iconRight}</InputIcon>}
            </div>
            {end}
        </div>
    );
}
