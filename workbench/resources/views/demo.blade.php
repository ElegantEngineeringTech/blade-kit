<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/resize@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/anchor@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/iconify-icon@2.3.0/dist/iconify-icon.min.js"></script>
</head>

<body class="">

    <div class="grid grid-cols-3 divide-x [&>*]:h-60">

        <div class="flex items-center justify-center border-b">
            <x-kit::button color="white">
                Button
            </x-kit::button>
        </div>
        <x-kit::popover class="flex flex-col items-center justify-center gap-1 border-b" x-data="{
            value: 'Initial',
        }">
            <x-kit::button color="white" class="!min-w-40 rounded-md" x-ref="trigger" x-on:click="open = !open">
                <span x-text="value"></span>
                <x-slot:icon-right class="ml-auto">
                    <iconify-icon icon="heroicons:chevron-up-down"></iconify-icon>
                </x-slot:icon-right>
            </x-kit::button>

            <x-kit::popover.content x-transition.origin.top=""
                class="flex min-w-40 flex-col rounded-md border bg-white shadow-lg">
                <div>
                    <x-kit::input autofocus size="sm" color="white" class="rounded-t-md border-b"
                        class-input="!ring-0" placeholder="Search">
                        <x-slot:icon class="text-black/40">
                            <iconify-icon icon="heroicons:magnifying-glass"></iconify-icon>
                        </x-slot:icon>
                    </x-kit::input>
                </div>
                <div class="flex flex-col gap-0.5 p-1">
                    <x-kit::button.radio color-checked="black" x-model="value" name="listbox" value="Initial"
                        class="w-full rounded hover:bg-gray-100" size="sm">
                        Initial
                        <x-slot:icon-right class="ml-auto hidden peer-checked/input:block">
                            <iconify-icon icon="heroicons:check"></iconify-icon>
                        </x-slot:icon-right>
                    </x-kit::button.radio>
                    <x-kit::button.radio color-checked="black" x-model="value" name="listbox" value="Option 1"
                        class="w-full rounded hover:bg-gray-100" size="sm">
                        Option 1
                        <x-slot:icon-right class="ml-auto hidden peer-checked/input:block">
                            <iconify-icon icon="heroicons:check"></iconify-icon>
                        </x-slot:icon-right>
                    </x-kit::button.radio>
                    <x-kit::button.radio color-checked="black" x-model="value" name="listbox" value="Option 2"
                        class="w-full rounded hover:bg-gray-100" size="sm">
                        Option 2
                        <x-slot:icon-right class="ml-auto hidden peer-checked/input:block">
                            <iconify-icon icon="heroicons:check"></iconify-icon>
                        </x-slot:icon-right>
                    </x-kit::button.radio>
                </div>
            </x-kit::popover.content>
        </x-kit::popover>
        <div class="flex items-center justify-center border-b">
            <x-kit::tag color="white">
                Tag
                <x-slot:button>
                    <x-kit::button color="white" size="2xs" class="rounded-full">
                        <x-slot:icon>
                            <iconify-icon icon="heroicons:x-mark"></iconify-icon>
                        </x-slot:icon>
                    </x-kit::button>
                </x-slot:button>
            </x-kit::tag>
        </div>
        <div class="flex items-center justify-center border-b">
            <x-kit::select color="white">
                <option>
                    Option 1
                </option>
            </x-kit::select>
        </div>
        <div class="flex items-center justify-center border-b">
            <x-kit::switch color="white">
                Switch
            </x-kit::switch>
        </div>
        <div class="flex items-center justify-center border-b">
            <x-kit::input class="max-w-40" size="lg" color="white" placeholder="Search">
                <x-slot:icon>
                    <iconify-icon icon="heroicons:magnifying-glass"></iconify-icon>
                </x-slot:icon>
            </x-kit::input>
        </div>

    </div>
</body>

</html>
