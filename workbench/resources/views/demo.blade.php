<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

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
                        x-on:click.stop="open = !open">
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
