import type { ComponentProps } from "react";
import clsx from "clsx";

export default function InputIcon({ className, ...props }: ComponentProps<"span">) {
    return <span {...props} className={clsx("el-input-icon", className)} />;
}
