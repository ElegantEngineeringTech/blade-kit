@props([
    'copy' => null,
    'icon' => 'heroicon-o-clipboard',
    'tooltip' => __('actions.copy'),
])

<x-kit::button :attributes="$attributes" x-data="clipboard({
    tooltip: `{{ $tooltip }}`
})" x-on:click="copy(`{{ $copy }}`)" x-bind="tooltip">

    <x-slot:icon>
        <span x-show="!copied" x-transition:enter>
            @svg($icon)
        </span>
        <span x-show="copied" x-cloak x-transition:enter>
            @svg('heroicon-m-check')
        </span>
    </x-slot:icon>

    {{ $slot }}

</x-kit::button>
