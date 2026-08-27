import Badge from "./Badge";

type ButtonBadgeProps = {
    count?: number;
};

export default function ButtonBadge({ count = 0 }: ButtonBadgeProps) {
    return <Badge className="absolute -top-1 -right-1" count={count} />;
}
