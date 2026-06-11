<script setup lang="ts">
import {
    Button,
    Checkbox,
    Radio,
    Switch,
    Textarea,
    Tag,
    Alert,
    Popover,
    Tooltip,
    Input,
    InputCard,
    InputGroup,
} from "@/index";
</script>

<template>
    <div class="grid grid-cols-1 divide-x divide-gray-200 *:h-60 md:grid-cols-3">
        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Input Card</h1>
            </div>
            <div
                class="flex grow items-center justify-center gap-2 border-b border-gray-200 p-3 flex-col"
            >
                <InputCard class="rounded-md ring-1 ring-inset">
                    <Radio name="input-card" value="1" />

                    Hello world
                </InputCard>

                <InputCard class="rounded-md ring-1 ring-inset">
                    <Radio name="input-card" value="2" />

                    Hello France
                </InputCard>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Input</h1>
            </div>
            <div
                class="flex grow items-center justify-center gap-2 border-b border-gray-200 p-3 flex-col"
            >
                <InputGroup class="rounded-md ring-1 ring-inset">
                    <template v-slot:icon>
                        <iconify-icon icon="lucide:search"></iconify-icon>
                    </template>
                    <input type="text" placeholder="Hello World" />
                </InputGroup>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Tooltip</h1>
            </div>
            <div
                class="flex grow items-center justify-center gap-2 border-b border-gray-200 p-3 flex-col"
            >
                <Tooltip class="max-w-52">
                    <template v-slot:default="{ trigger }">
                        <Button color="white" class="rounded-md ring-1 ring-inset" v-bind="trigger">
                            hover me
                        </Button>
                    </template>
                    <template v-slot:tooltip>
                        Occaecat incididunt tempor elit consequat aute Lorem anim minim.
                    </template>
                </Tooltip>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Popover</h1>
            </div>
            <div
                class="flex grow items-center justify-center gap-2 border-b border-gray-200 p-3 flex-col"
            >
                <div class="flex flex-wrap gap-1">
                    <Popover placement="bottom-start" :trap="false" class="max-w-52">
                        <template v-slot:default="{ toggle, trigger }">
                            <Button
                                color="white"
                                class="rounded-md ring-1 ring-inset"
                                v-bind="trigger"
                                v-on:click="toggle"
                            >
                                toggle
                            </Button>
                        </template>
                        <template v-slot:popover>
                            <div class="bg-white rounded-md p-2 shadow">
                                Occaecat incididunt tempor elit consequat aute Lorem anim minim.
                            </div>
                        </template>
                    </Popover>

                    <Popover placement="bottom" :trap="false" class="max-w-52">
                        <template v-slot:default="{ toggle, trigger }">
                            <Button
                                color="white"
                                class="rounded-md ring-1 ring-inset"
                                v-bind="trigger"
                                v-on:click="toggle"
                            >
                                toggle
                            </Button>
                        </template>
                        <template v-slot:popover>
                            <div class="bg-white rounded-md p-2 shadow">
                                Occaecat incididunt tempor elit consequat aute Lorem anim minim.
                            </div>
                        </template>
                    </Popover>

                    <Popover placement="bottom-end" :trap="false" class="max-w-52">
                        <template v-slot:default="{ toggle, trigger }">
                            <Button
                                color="white"
                                class="rounded-md ring-1 ring-inset"
                                v-bind="trigger"
                                v-on:click="toggle"
                            >
                                toggle
                            </Button>
                        </template>
                        <template v-slot:popover>
                            <div class="bg-white rounded-md p-2 shadow">
                                Occaecat incididunt tempor elit consequat aute Lorem anim minim.
                            </div>
                        </template>
                    </Popover>
                </div>
                <div class="flex flex-wrap gap-1">
                    <Popover placement="top-start" :trap="false" class="max-w-52">
                        <template v-slot:default="{ toggle, trigger }">
                            <Button
                                color="white"
                                class="rounded-md ring-1 ring-inset"
                                v-bind="trigger"
                                v-on:click="toggle"
                            >
                                toggle
                            </Button>
                        </template>
                        <template v-slot:popover>
                            <div class="bg-white rounded-md p-2 shadow">
                                Occaecat incididunt tempor elit consequat aute Lorem anim minim.
                            </div>
                        </template>
                    </Popover>

                    <Popover placement="top" :trap="false" class="max-w-52">
                        <template v-slot:default="{ toggle, trigger }">
                            <Button
                                color="white"
                                class="rounded-md ring-1 ring-inset"
                                v-bind="trigger"
                                v-on:click="toggle"
                            >
                                toggle
                            </Button>
                        </template>
                        <template v-slot:popover>
                            <div class="bg-white rounded-md p-2 shadow">
                                Occaecat incididunt tempor elit consequat aute Lorem anim minim.
                            </div>
                        </template>
                    </Popover>

                    <Popover placement="top-end" :trap="false" class="max-w-52">
                        <template v-slot:default="{ toggle, trigger }">
                            <Button
                                color="white"
                                class="rounded-md ring-1 ring-inset"
                                v-bind="trigger"
                                v-on:click="toggle"
                            >
                                toggle
                            </Button>
                        </template>
                        <template v-slot:popover>
                            <div class="bg-white rounded-md p-2 shadow">
                                Occaecat incididunt tempor elit consequat aute Lorem anim minim.
                            </div>
                        </template>
                    </Popover>
                </div>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Alert</h1>
            </div>
            <div
                class="flex grow items-center justify-center gap-2 border-b border-gray-200 p-3 flex-col"
            >
                <Alert class="rounded-md shadow-sm">
                    <template v-slot:icon>
                        <iconify-icon icon="heroicons:check"></iconify-icon>
                    </template>

                    Aliquip deserunt exercitation laboris culpa est do.
                </Alert>
                <Alert class="rounded-md shadow-sm" color="rose-light">
                    Aliquip deserunt exercitation laboris culpa est do.
                </Alert>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button</h1>
            </div>
            <div class="flex grow items-center justify-center gap-2 border-b border-gray-200">
                <Button color="rose" class="rounded-md ring-1 ring-inset">
                    Button
                    <template v-slot:icon-right>
                        <iconify-icon icon="heroicons:check"></iconify-icon>
                    </template>
                </Button>

                <Button color="rose-light" class="rounded-md ring-1 ring-inset"> Button </Button>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button</h1>
            </div>
            <div class="flex grow items-center justify-center gap-2 border-b border-gray-200 p-3">
                <Button color="rose" class="rounded-md ring-1 ring-inset w-full">
                    Button
                    <template v-slot:icon-right class="ml-auto">
                        <iconify-icon icon="heroicons:check"></iconify-icon>
                    </template>
                </Button>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Loading button</h1>
            </div>
            <div class="flex grow items-center justify-center gap-2 border-b border-gray-200">
                <Button color="white" class="rounded-md ring-1 ring-inset" data-loading>
                    Button
                </Button>

                <Button color="sky-light" class="el-loading rounded-md ring-1 ring-inset">
                    Button
                </Button>

                <Button color="sky-light" class="rounded-md ring-1 ring-inset" loading>
                    Button
                </Button>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button File</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <Button color="white" class="rounded-md ring-1 ring-inset">
                    <template v-slot:input>
                        <input type="file" multiple name="upload" />
                    </template>

                    <template v-slot:icon>
                        <iconify-icon icon="heroicons:arrow-up-tray"></iconify-icon>
                    </template>
                    Select a file
                </Button>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Tag</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <Tag color="white" class="rounded-full ring-1 ring-inset">
                    <template v-slot:icon>
                        <iconify-icon icon="heroicons:check"></iconify-icon>
                    </template>

                    Tag

                    <template v-slot:button>
                        <Button color="white" size="2xs" class="rounded-full ring-1 ring-inset">
                            <template v-slot:icon>
                                <iconify-icon icon="heroicons:x-mark"></iconify-icon>
                            </template>
                        </Button>
                    </template>
                </Tag>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Textarea</h1>
            </div>
            <div class="flex grow items-center justify-center gap-2 border-b border-gray-200 p-3">
                <Textarea autosized color="white" class="rounded-md ring-1 ring-inset w-full" />
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Switch</h1>
            </div>
            <div
                class="flex grow flex-col items-center justify-center gap-3 border-b border-gray-200"
            >
                <div>
                    <Switch class="" checked />
                    <Switch class="" checked disabled />
                    <Switch class="" disabled />
                </div>
                <div>
                    <Switch class="rounded" />
                    <Switch class="rounded-md" />
                    <Switch class="rounded-lg" />
                    <Switch class="" />
                </div>
                <div>
                    <Switch class="text-xs" />
                    <Switch class="text-sm" />
                    <Switch class="text-base" />
                    <Switch class="text-lg" />
                </div>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Disabled Switch</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <label>
                    <Switch checked />
                    <span> Switch </span>
                </label>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Radio</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <div class="flex gap-3">
                    <label>
                        <Radio name="demo-radio" value="yes" />
                        <span> Yes </span>
                    </label>
                    <label>
                        <Radio name="demo-radio" value="no" />
                        <span> No </span>
                    </label>
                </div>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Checkbox</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <label class="">
                    <Checkbox />
                    I accept
                </label>
            </div>
        </div>
    </div>
</template>
