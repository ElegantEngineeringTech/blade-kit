import type { ComponentProps } from "react";

import clsx from "clsx";

export default function Checkbox({
    type = "checkbox",
    className,
    ...props
}: ComponentProps<"input">) {
    return <input {...props} className={clsx("el-checkbox", className)} type={type} />;
}
