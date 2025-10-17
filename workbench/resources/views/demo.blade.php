<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script defer src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-tooltip@1.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tippy.js@6/dist/tippy.min.css" />

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/resize@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/anchor@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/iconify-icon@2.3.0/dist/iconify-icon.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    {{ Vite::useHotFile('vendor/blade-kit/blade-kit.hot')->useBuildDirectory('vendor/blade-kit')->withEntryPoints('workbench/resources/css/demo.css') }}

</head>

<body class="">

    <div class="grid grid-cols-1 divide-x divide-gray-200 *:h-60 md:grid-cols-3">

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::button color="rose" class="rounded-md ring-1 ring-inset">
                    Button

                    <x-slot:icon>
                        <iconify-icon icon="heroicons:check"></iconify-icon>
                    </x-slot:icon>
                </x-kit::button>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button File</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::button color="white" class="rounded-md ring-1 ring-inset">
                    <x-slot:input>
                        <input type="file" multiple name="upload" />
                    </x-slot:input>

                    <x-slot:icon>
                        <iconify-icon icon="heroicons:arrow-up-tray"></iconify-icon>
                    </x-slot:icon>
                    Select a file
                </x-kit::button>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button Copy</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::button.copy tooltip="Copy" tooltip-checked="Copied" copy="Foo" color="white"
                    class="rounded-md ring-1 ring-inset">
                    <x-slot:icon>
                        <iconify-icon icon="heroicons:clipboard"></iconify-icon>
                    </x-slot:icon>
                    <x-slot:icon-checked>
                        <iconify-icon icon="heroicons:check"></iconify-icon>
                    </x-slot:icon-checked>
                    Copy
                </x-kit::button.copy>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Radio button</h1>
            </div>
            <div class="flex grow items-center justify-center gap-2 border-b border-gray-200">
                <x-kit::button color="white" class="rounded-md ring-1 ring-inset">
                    <x-slot:input>
                        <input type="radio" name="button-radio" value="yes" />
                    </x-slot:input>
                    Yes
                </x-kit::button>

                <x-kit::button color="white" class="rounded-md ring-1 ring-inset">
                    <x-slot:input>
                        <input type="radio" name="button-radio" value="no" />
                    </x-slot:input>
                    No
                </x-kit::button>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button checkbox</h1>
            </div>
            <div class="flex grow items-center justify-center gap-2 border-b border-gray-200">
                <x-kit::button color="white" class="rounded-md ring-1 ring-inset">
                    <x-slot:input>
                        <input type="checkbox" name="button-checkbox" value="1" />
                    </x-slot:input>
                    Option 1
                </x-kit::button>

                <x-kit::button color="white" class="rounded-md ring-1 ring-inset">
                    <x-slot:input>
                        <input type="checkbox" name="button-checkbox" value="2" />
                    </x-slot:input>
                    Option 2
                </x-kit::button>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Segments</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <div class="*:has-checked:shadow-sm flex rounded-lg bg-gray-100 p-1 *:rounded-md">
                    <x-kit::button color-checked="white">
                        <x-slot:input>
                            <input type="radio" name="segment" value="1" checked />
                        </x-slot:input>
                        Home
                    </x-kit::button>

                    <x-kit::button color-checked="white">
                        <x-slot:input>
                            <input type="radio" name="segment" value="2" />
                        </x-slot:input>
                        Settings
                    </x-kit::button>
                </div>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Tag</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::tag color="white" class="rounded-full ring-1 ring-inset">
                    <x-slot:icon>
                        <iconify-icon icon="heroicons:check"></iconify-icon>
                    </x-slot:icon>

                    Tag
                    <x-slot:button>
                        <x-kit::button color="white" size="2xs" class="rounded-full ring-1 ring-inset">
                            <x-slot:icon>
                                <iconify-icon icon="heroicons:x-mark"></iconify-icon>
                            </x-slot:icon>
                        </x-kit::button>
                    </x-slot:button>
                </x-kit::tag>
            </div>
        </div>

        <div class="flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Popover</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::popover class="">
                    <x-kit::button class="rounded-md ring-1 ring-inset" color="white" x-ref="trigger"
                        x-on:click="open = !open">
                        Click me
                        <x-slot:icon-right>
                            <iconify-icon icon="heroicons:chevron-up-down"></iconify-icon>
                        </x-slot:icon-right>
                    </x-kit::button>

                    <x-kit::popover.content class="z-20 p-3 md:p-0" x-anchor.bottom-end.offset.5="$refs.trigger"
                        x-transition.origin.top="">
                        <div
                            class="mt-auto flex w-full flex-col rounded-lg border border-gray-200 bg-white shadow-lg md:max-w-72">

                            <div class="p-1">
                                <x-kit::input color="white" size="sm"
                                    class="items-center rounded-md outline-none ring-1 ring-inset">

                                    <x-kit::input.icon>
                                        <iconify-icon icon="lucide:search"></iconify-icon>
                                    </x-kit::input.icon>

                                    <input type="text" placeholder="Search" />

                                    <x-slot:end>
                                        <x-kit::button size="xs" color="gray"
                                            class="mr-0.5 rounded ring-1 ring-inset">
                                            New
                                            <x-slot:icon-right>
                                                <iconify-icon icon="heroicons:plus"></iconify-icon>
                                            </x-slot:icon-right>
                                        </x-kit::button>
                                    </x-slot:end>

                                </x-kit::input>
                            </div>

                            <div class="flex gap-0.5 overflow-auto p-1">
                                <x-kit::tag color="gray" size="2xs" class="rounded">
                                    Tag
                                    <x-slot:button>
                                        <x-kit::button color="gray" size="2xs" class="rounded">
                                            <x-slot:icon>
                                                <iconify-icon icon="heroicons:x-mark"></iconify-icon>
                                            </x-slot:icon>
                                        </x-kit::button>
                                    </x-slot:button>
                                </x-kit::tag>
                            </div>

                            <div class="flex items-center">
                                <p class="px-2.5 py-0.5 text-sm font-semibold">
                                    Recent
                                </p>
                                <span class="grow border-b border-gray-200"></span>
                            </div>

                            <div class="flex max-h-full flex-col gap-0.5 overflow-auto p-1 md:max-h-56">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="flex gap-0.5">
                                        <x-kit::button color="white" size="sm" class="flex-1 rounded">
                                            <x-slot:icon class="text-gray-400">
                                                <iconify-icon icon="heroicons:bookmark"></iconify-icon>
                                            </x-slot:icon>
                                            <x-slot:content class="grow">
                                                <span class="min-w-0 truncate">
                                                    Name {{ $i }}
                                                </span>
                                                <small class="ml-auto whitespace-nowrap text-gray-400">
                                                    helper
                                                </small>
                                            </x-slot:content>
                                        </x-kit::button>
                                        <x-kit::button color="white" size="sm" class="rounded">
                                            <x-slot:icon class="text-gray-400">
                                                <iconify-icon icon="lucide:arrow-up-right"></iconify-icon>
                                            </x-slot:icon>
                                        </x-kit::button>
                                    </div>
                                @endfor
                            </div>

                        </div>
                    </x-kit::popover.content>
                </x-kit::popover>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Combobox</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::popover x-data="{
                    search: '',
                    values: [],
                    options: Array.from({ length: 11 }, (_, i) => 'Option ' + i),
                    get filteredOptions() {
                        const search = this.search.toLowerCase();
                
                        if (search) {
                            return this.options.filter((option) => option.toLowerCase().includes(search));
                        }
                
                        return this.options;
                    }
                }">
                    <x-kit::button class="rounded-md ring-1 ring-inset" color="white" x-ref="trigger"
                        x-on:click="open = !open">
                        Click me
                        <x-slot:icon-right>
                            <iconify-icon icon="heroicons:chevron-up-down"></iconify-icon>
                        </x-slot:icon-right>
                    </x-kit::button>

                    <x-kit::popover.content class="z-20 p-3 md:p-0" x-anchor.bottom-end.offset.5="$refs.trigger"
                        x-transition.origin.top="">
                        <div
                            class="mt-auto flex w-full flex-col rounded-lg border border-gray-200 bg-white shadow-lg md:max-w-72">

                            <div class="p-1">
                                <x-kit::input color="white" size="sm"
                                    class="items-center rounded outline-none ring-1 ring-inset">

                                    <x-kit::input.icon>
                                        <iconify-icon icon="lucide:search"></iconify-icon>
                                    </x-kit::input.icon>

                                    <input type="text" placeholder="Search" />

                                    <x-slot:end>
                                        <x-kit::button size="sm" color="gray"
                                            class="rounded ring-1 ring-inset">
                                            New
                                            <x-slot:icon-right>
                                                <iconify-icon icon="heroicons:plus"></iconify-icon>
                                            </x-slot:icon-right>
                                        </x-kit::button>
                                    </x-slot:end>

                                </x-kit::input>
                            </div>

                            <div class="flex max-h-full flex-col gap-0.5 overflow-auto p-1 md:max-h-56">
                                <template x-for="option in filteredOptions" x-bind:key="option">
                                    <div class="flex gap-0.5">
                                        <x-kit::button class="w-full rounded-md" size="sm">
                                            <x-slot:input>
                                                <input type="checkbox" name="combobox" x-bind:value="option"
                                                    x-model="values" />
                                            </x-slot:input>
                                            <span x-text="option"></span>
                                            <x-slot:icon-right class="invisible ml-auto peer-checked/input:visible">
                                                <iconify-icon icon="lucide:check"></iconify-icon>
                                            </x-slot:icon-right>
                                        </x-kit::button>
                                    </div>
                                </template>
                            </div>

                        </div>
                    </x-kit::popover.content>
                </x-kit::popover>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Select</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::select color="white" class="rounded ring-1 ring-inset">
                    <option> Option 1</option>
                    <option> Option 2</option>
                    <option> Option 3</option>
                </x-kit::select>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Switch</h1>
            </div>
            <div class="flex grow flex-col items-center justify-center gap-3 border-b border-gray-200">
                <div>
                    <x-kit::switch class="" checked />
                    <x-kit::switch class="" checked disabled />
                    <x-kit::switch class="" disabled />
                </div>
                <div>
                    <x-kit::switch class="rounded" />
                    <x-kit::switch class="rounded-md" />
                    <x-kit::switch class="rounded-lg" />
                    <x-kit::switch class="" />

                </div>
                <div>
                    <x-kit::switch class="text-xs" />
                    <x-kit::switch class="text-sm" />
                    <x-kit::switch class="text-base" />
                    <x-kit::switch class="text-lg" />
                </div>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Disabled Switch</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <label class="">
                    <x-kit::switch checked class="text-sm" />
                    Switch
                </label>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Input</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::input color="white" size="lg" class="items-center rounded-md ring-1 ring-inset">

                    <x-slot:start>
                        <x-kit::tag size="sm" color="gray" class="ml-1 rounded">
                            EUR
                        </x-kit::tag>
                    </x-slot:start>

                    <x-kit::input.icon>
                        <iconify-icon icon="heroicons:magnifying-glass"></iconify-icon>
                    </x-kit::input.icon>

                    <input type="text" placeholder="Hello world" />

                    <x-kit::input.icon>
                        <iconify-icon icon="heroicons:x-mark"></iconify-icon>
                    </x-kit::input.icon>

                    <x-slot:end>
                        <x-kit::button size="sm" color="black" class="mr-1 rounded">
                            New

                            <x-slot:icon-right>
                                <iconify-icon icon="heroicons:plus"></iconify-icon>
                            </x-slot:icon-right>
                        </x-kit::button>
                    </x-slot:end>

                </x-kit::input>
            </div>
        </div>


        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Input</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::input.base color="white" size="lg" class="rounded-md ring-1 ring-inset"
                    placeholder="Placeholder" />
            </div>
        </div>


        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Textarea</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::textarea color="white" size="lg" autosized
                    class="w-1/2 rounded-md ring-1 ring-inset" />
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Checkbox</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <label class="">
                    <x-kit::checkbox />
                    I accept
                </label>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Radio</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <div class="flex gap-3">
                    <label class="">
                        <x-kit::radio name="demo-radio" value="yes" />
                        Yes
                    </label>
                    <label class="">
                        <x-kit::radio name="demo-radio" value="no" />
                        No
                    </label>
                </div>
            </div>
        </div>


    </div>
</body>

</html>
