import type { ComponentProps } from "react";
import clsx from "clsx";
type SwitchProps = ComponentProps<"input"> & { color?: string };
export default function Switch({ color = "emerald", className, ...props }: SwitchProps) {
    const type = props.type ?? "checkbox";

    return (
        <input
            role={type === "checkbox" ? "switch" : undefined}
            {...props}
            className={clsx("el-switch", className)}
            data-color={color}
            type={type}
        />
    );
}
