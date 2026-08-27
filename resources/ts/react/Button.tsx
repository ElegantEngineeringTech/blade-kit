import clsx from "clsx";
import type { ButtonHTMLAttributes, ElementType, LabelHTMLAttributes, ReactNode } from "react";
import ButtonBadge from "./ButtonBadge";
import ButtonIcon from "./ButtonIcon";

type ButtonProps = {
    tag?: ElementType;
    type?: ButtonHTMLAttributes<HTMLButtonElement>["type"];
    size?: string;
    color?: string;
    colorChecked?: string;
    disabled?: boolean;
    loading?: boolean;
    download?: boolean | string;
    offset?: boolean;
    badge?: number;
    children?: ReactNode;
    before?: ReactNode;
    input?: ReactNode;
    icon?: ReactNode;
    iconRight?: ReactNode;
    loader?: ReactNode;
    after?: ReactNode;
} & Omit<
    ButtonHTMLAttributes<HTMLButtonElement> & LabelHTMLAttributes<HTMLLabelElement>,
    "children" | "type" | "color"
>;

export default function Button({
    tag,
    type,
    size = "base",
    color,
    colorChecked,
    disabled = false,
    loading = false,
    download,
    offset = true,
    badge,

    children,
    before,
    input,
    icon,
    iconRight,
    loader,
    after,

    className,
    ...attributes
}: ButtonProps) {
    const computedTag = tag ?? (input ? "label" : "button");

    const computedType = type ?? (tag === "button" ? "button" : undefined);

    const Component = computedTag;

    return (
        <Component
            {...attributes}
            className={clsx(
                "el-button el-spacing el-text el-bg el-ring el-outline el-border el-shadow",
                className,
            )}
            data-size={size}
            data-color={color}
            data-color-checked={colorChecked}
            disabled={disabled || undefined}
            type={computedType}
            download={download || undefined}
            data-loading={loading || undefined}
        >
            {before}
            {input}

            {icon && (
                <ButtonIcon offset={offset} badge={badge}>
                    {icon}
                </ButtonIcon>
            )}

            {children && (
                <span
                    className={clsx(
                        "relative inline-flex min-w-0",
                        icon && offset && "ml-2",
                        iconRight && offset && "mr-2",
                    )}
                >
                    {children}

                    {!icon && badge ? <ButtonBadge count={badge} /> : null}
                </span>
            )}

            {iconRight && <ButtonIcon offset={offset}>{iconRight}</ButtonIcon>}

            <span className="el-loader">
                <span className="size-4 animate-spin-loader rounded-full border-2 border-current border-t-transparent border-r-transparent" />
                {loader}
            </span>

            {after}
        </Component>
    );
}
