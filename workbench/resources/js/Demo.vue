<script setup lang="ts">
import { Button, Checkbox, Radio, Switch, Textarea } from "@/index";
</script>

<template>
    <div class="grid grid-cols-1 divide-x divide-gray-200 *:h-60 md:grid-cols-3">
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
