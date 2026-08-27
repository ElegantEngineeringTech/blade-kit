import type { ReactNode } from "react";
import Popover from "./Popover";

type TooltipProps = {
    children: (props: {
        trigger: Record<string, unknown>;
        show: () => void;
        hide: () => void;
    }) => ReactNode;
    tooltip: ReactNode;
    className?: string;
};
export default function Tooltip({ children, tooltip, className }: TooltipProps) {
    return (
        <Popover
            trap={false}
            backdrop={false}
            role="tooltip"
            className={className}
            popover={() => <div className="el-tooltip">{tooltip}</div>}
        >
            {({ trigger, show, hide }) =>
                children({
                    trigger: {
                        ...trigger,
                        onMouseEnter: show,
                        onMouseLeave: hide,
                        onFocus: show,
                        onBlur: hide,
                    },
                    show,
                    hide,
                })
            }
        </Popover>
    );
}
