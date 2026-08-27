import type { ComponentProps } from "react";
import clsx from "clsx";

export default function InputCard({ className, ...props }: ComponentProps<"label">) {
    return <label {...props} className={clsx("el-input-card", className)} />;
}
