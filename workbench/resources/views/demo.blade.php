<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @custom-variant dark (&:where(.dark, .dark *));

        @theme {
            --animate-spin-loader: spin 0.5s linear infinite;

            --background-image-select: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            --background-image-checkbox: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
        }
    </style>

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
</head>

<body class="">

    <div class="grid grid-cols-1 divide-x divide-gray-200 *:h-60 md:grid-cols-3">

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::button color="white" class="rounded-md ring-1 ring-inset">
                    Button
                </x-kit::button>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button File</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::button.file name="upload" color="white" class="rounded-md ring-1 ring-inset">
                    <x-slot:icon>
                        <iconify-icon icon="heroicons:arrow-up-tray"></iconify-icon>
                    </x-slot:icon>
                    Select a file
                </x-kit::button.file>
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
                <h1 class="font-semibold">Tag</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::tag color="white" class="rounded-full ring-1 ring-inset">
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
                                <x-kit::input.parent color="gray" class="outline-0! rounded-md ring-1 ring-inset">
                                    <x-kit::input size="sm" color="transparent" placeholder="Search">
                                        <x-slot:icon>
                                            <iconify-icon icon="heroicons:magnifying-glass"></iconify-icon>
                                        </x-slot:icon>
                                    </x-kit::input>
                                    <x-kit::button color="white" class="m-0.5 rounded font-semibold ring-1 ring-inset"
                                        size="xs">
                                        <x-slot:icon-right>
                                            <iconify-icon icon="heroicons:plus"></iconify-icon>
                                        </x-slot:icon-right>
                                        New
                                    </x-kit::button>
                                </x-kit::input.parent>
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
                                <x-kit::input.parent color="gray" class="outline-0! rounded-md ring-1 ring-inset">
                                    <x-kit::input size="sm" color="transparent" placeholder="Search"
                                        x-model="search">
                                        <x-slot:icon>
                                            <iconify-icon icon="lucide:search"></iconify-icon>
                                        </x-slot:icon>
                                    </x-kit::input>
                                    <x-kit::button color="white"
                                        class="m-0.5 rounded font-semibold ring-1 ring-inset" size="xs">
                                        <x-slot:icon-right>
                                            <iconify-icon icon="lucide:plus"></iconify-icon>
                                        </x-slot:icon-right>
                                        New
                                    </x-kit::button>
                                </x-kit::input.parent>
                            </div>

                            <div class="flex max-h-full flex-col gap-0.5 overflow-auto p-1 md:max-h-56">
                                <template x-for="option in filteredOptions" x-bind:key="option">
                                    <div class="flex gap-0.5">
                                        <x-kit::button.radio class="w-full rounded-md" type="checkbox"
                                            x-model="values" x-bind:value="option" name="combobox"
                                            size="sm">
                                            <span x-text="option"></span>
                                            <x-slot:icon-right class="invisible ml-auto peer-checked/input:visible">
                                                <iconify-icon icon="lucide:check"></iconify-icon>
                                            </x-slot:icon-right>
                                        </x-kit::button.radio>
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
                    <option>
                        Option 1
                    </option>
                </x-kit::select>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Switch</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::switch>
                    Switch
                </x-kit::switch>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Disabled Switch</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::switch disabled checked>
                    Switch
                </x-kit::switch>
            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Input</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <x-kit::input.parent color="gray" class="rounded-md ring-1 ring-inset">
                    <x-kit::input color="transparent" placeholder="Search">
                        <x-slot:icon>
                            <iconify-icon icon="heroicons:magnifying-glass"></iconify-icon>
                        </x-slot:icon>
                    </x-kit::input>
                    <x-kit::button color="white" class="m-0.5 rounded font-semibold ring-1 ring-inset"
                        size="sm">
                        <x-slot:icon-right>
                            <iconify-icon icon="heroicons:plus"></iconify-icon>
                        </x-slot:icon-right>
                        New
                    </x-kit::button>
                </x-kit::input.parent>
            </div>
        </div>



    </div>
</body>

</html>
