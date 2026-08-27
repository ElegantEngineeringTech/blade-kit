import clsx from "clsx";
import type { ComponentProps } from "react";

import ButtonBadge from "./ButtonBadge";

type ButtonIconProps = ComponentProps<"span"> & {
    offset?: boolean;
    badge?: number;
};

export default function ButtonIcon({
    offset = false,
    badge,
    className,
    children,
    ...props
}: ButtonIconProps) {
    return (
        <span {...props} className={clsx("el-button-icon", offset && "-mx-1", className)}>
            {children}

            {badge ? <ButtonBadge count={badge} /> : null}
        </span>
    );
}
