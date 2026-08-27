import type { ComponentProps } from "react";
import clsx from "clsx";
export default function Radio({ type = "radio", className, ...props }: ComponentProps<"input">) {
    return <input {...props} className={clsx("el-radio", className)} type={type} />;
}
