import {
    Alert,
    Button,
    Checkbox,
    InputCard,
    InputGroup,
    Popover,
    Radio,
    Switch,
    Tag,
    Textarea,
    Tooltip,
} from "@/index";

const text = "Occaecat incididunt tempor elit consequat aute Lorem anim minim.";

export default function Demo() {
    return (
        <div className="grid grid-cols-1 divide-x divide-gray-200 *:h-60 md:grid-cols-3">
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Input Card</h1>
                <div className="flex grow flex-col items-center justify-center gap-2 border-b border-gray-200 p-3">
                    <InputCard className="rounded-md ring-1 ring-inset">
                        <Radio name="input-card" value="1" />
                        Hello world
                    </InputCard>
                    <InputCard className="rounded-md ring-1 ring-inset">
                        <Radio name="input-card" value="2" />
                        Hello France
                    </InputCard>
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Input</h1>
                <div className="flex grow items-center justify-center gap-2 border-b border-gray-200 p-3">
                    <InputGroup
                        className="rounded-md ring-1 ring-inset"
                        icon={<iconify-icon icon="lucide:search" />}
                    >
                        <input type="text" placeholder="Hello World" />
                    </InputGroup>
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Tooltip</h1>
                <div className="flex grow items-center justify-center border-b border-gray-200">
                    <Tooltip tooltip={text}>
                        {({ trigger }) => (
                            <Button
                                color="white"
                                className="rounded-md ring-1 ring-inset"
                                {...trigger}
                            >
                                hover me
                            </Button>
                        )}
                    </Tooltip>
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Popover</h1>
                <div className="flex grow items-center justify-center gap-1 border-b border-gray-200">
                    <Popover
                        trap={false}
                        placement="bottom"
                        popover={() => <div className="rounded-md bg-white p-2 shadow">{text}</div>}
                    >
                        {({ trigger, toggle }) => (
                            <Button color="white" {...trigger} onClick={toggle}>
                                toggle
                            </Button>
                        )}
                    </Popover>
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Alert</h1>
                <div className="flex grow flex-col items-center justify-center gap-2 border-b border-gray-200">
                    <Alert
                        className="rounded-md shadow-sm"
                        icon={<iconify-icon icon="heroicons:check" />}
                    >
                        Aliquip deserunt exercitation laboris culpa est do.
                    </Alert>
                    <Alert color="rose-light" className="rounded-md shadow-sm">
                        Aliquip deserunt exercitation laboris culpa est do.
                    </Alert>
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Button</h1>
                <div className="flex grow items-center justify-center gap-2 border-b border-gray-200">
                    <Button color="rose">Button</Button>
                    <Button color="rose-light">Button</Button>
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Tag</h1>
                <div className="flex grow items-center justify-center border-b border-gray-200">
                    <Tag
                        color="white"
                        className="rounded-full ring-1 ring-inset"
                        icon={<iconify-icon icon="heroicons:check" />}
                        button={
                            <Button color="white" size="2xs">
                                x
                            </Button>
                        }
                    >
                        Tag
                    </Tag>
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Textarea</h1>
                <div className="flex grow items-center justify-center border-b border-gray-200 p-3">
                    <Textarea
                        autosized
                        color="white"
                        className="w-full rounded-md ring-1 ring-inset"
                    />
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Switch</h1>
                <div className="flex grow items-center justify-center gap-2 border-b border-gray-200">
                    <Switch checked />
                    <Switch checked disabled />
                    <Switch disabled />
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Radio</h1>
                <div className="flex grow items-center justify-center gap-3 border-b border-gray-200">
                    <label>
                        <Radio name="demo-radio" value="yes" /> Yes
                    </label>
                    <label>
                        <Radio name="demo-radio" value="no" /> No
                    </label>
                </div>
            </section>
            <section className="isolate flex flex-col">
                <h1 className="p-3 font-semibold">Checkbox</h1>
                <div className="flex grow items-center justify-center border-b border-gray-200">
                    <label>
                        <Checkbox /> I accept
                    </label>
                </div>
            </section>
        </div>
    );
}
