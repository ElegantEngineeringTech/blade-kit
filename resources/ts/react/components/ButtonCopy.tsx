import { useState, type ComponentProps, type ReactNode } from "react";
import Button from "./Button";
import Tooltip from "./Tooltip";

type ButtonCopyProps = Omit<ComponentProps<typeof Button>, "icon" | "iconRight"> & {
    copy?: string;
    icon?: (copied: boolean) => ReactNode;
    iconRight?: (copied: boolean) => ReactNode;
    tooltip?: (copied: boolean) => ReactNode;
};
export default function ButtonCopy({
    copy,
    icon,
    iconRight,
    tooltip,
    children,
    onClick,
    ...props
}: ButtonCopyProps) {
    const [copied, setCopied] = useState(false);

    const onCopy = (event: React.MouseEvent<HTMLButtonElement>) => {
        onClick?.(event);
        if (copy) {
            setCopied(true);
            window.setTimeout(() => setCopied(false), 2000);
            navigator.clipboard.writeText(copy);
        }
    };

    return (
        <Tooltip tooltip={tooltip?.(copied)}>
            {({ trigger }) => (
                <Button
                    {...props}
                    {...trigger}
                    onClick={onCopy}
                    icon={icon?.(copied)}
                    iconRight={iconRight?.(copied)}
                >
                    {children}
                </Button>
            )}
        </Tooltip>
    );
}
