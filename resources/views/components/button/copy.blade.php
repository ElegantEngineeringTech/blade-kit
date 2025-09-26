@props([
    'copy' => null,
    'icon' => null,
    'iconChecked' => null,
    'tooltip' => __('actions.copy'),
    'tooltipChecked' => __('actions.copied'),
])

<x-kit::button :attributes="$attributes" x-data="{
    copied: false,
    copy(value) {
        this.copied = true;
        setTimeout(() => { this.copied = false; }, 2_000);

        navigator.clipboard.writeText(value); // require https
    },
    tooltip: {
        ['x-on:click']() {
            this.copy({{ Js::from($copy) }});
        },
        ['x-tooltip']() {
            return {
                content: this.copied ? {{ Js::from($tooltipChecked) }} : {{ Js::from($tooltip) }},
                hideOnClick: false
            };
        },
    },
}" x-bind="tooltip">

    <x-slot:icon>
        <span x-show="!copied" x-transition:enter>
            {{ $icon }}
        </span>
        <span x-show="copied" x-cloak x-transition:enter>
            {{ $iconChecked }}
        </span>
    </x-slot:icon>

    {{ $slot }}
</x-kit::button>
