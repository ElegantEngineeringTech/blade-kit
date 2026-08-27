import clsx from "clsx";
import type { ComponentProps, ElementType, ReactNode } from "react";
import TagIcon from "./TagIcon";

type TagProps<T extends ElementType = "span"> = {
    tag?: T;
    type?: string;
    size?: string;
    color?: string;
    offset?: boolean;
    truncate?: boolean;
    children?: ReactNode;
    icon?: ReactNode;
    iconRight?: ReactNode;
    button?: ReactNode;
} & Omit<ComponentProps<T>, "children" | "color">;

export default function Tag<T extends ElementType = "span">({
    tag,
    type,
    size = "2xs",
    color,
    offset = true,
    truncate = false,
    children,
    icon,
    iconRight,
    button,
    className,
    ...props
}: TagProps<T>) {
    const Component = tag ?? "span";

    return (
        <Component
            {...props}
            className={clsx(
                "el-tag el-spacing el-text el-bg el-ring el-outline el-border el-shadow",
                className,
            )}
            data-size={size}
            data-color={color}
            type={type}
        >
            {icon && <TagIcon offset={offset}>{icon}</TagIcon>}

            {children && (
                <span
                    className={clsx(
                        "el-tag-content",
                        truncate && "truncate",
                        icon && offset && "ml-2",
                        iconRight && offset && "mr-2",
                    )}
                >
                    {children}
                </span>
            )}

            {iconRight && <TagIcon offset={offset}>{iconRight}</TagIcon>}

            {button && <span className="el-tag-button">{button}</span>}
        </Component>
    );
}
