import clsx from "clsx";
import type { ComponentProps } from "react";

type TagIconProps = ComponentProps<"span"> & {
    offset?: boolean;
};

export default function TagIcon({ offset = false, className, children, ...props }: TagIconProps) {
    return (
        <span {...props} className={clsx("el-tag-icon", offset && "-mx-1", className)}>
            {children}
        </span>
    );
}
