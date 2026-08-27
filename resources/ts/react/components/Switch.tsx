import type { ComponentProps } from "react";
import clsx from "clsx";
type SwitchProps = ComponentProps<"input"> & { color?: string };
export default function Switch({ color = "emerald", className, ...props }: SwitchProps) {
    return (
        <input
            {...props}
            className={clsx("el-switch", className)}
            data-color={color}
            type={props.type ?? "checkbox"}
        />
    );
}
