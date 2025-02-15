@props([
    'checked' => false,
    'disabled' => false,
    'colorChecked' => 'black',
    'type' => 'radio',
    'icon' => null,
    'iconRight' => null,
])

@php
    $input = $attributes->filter(function ($value, $key) {
        return in_array($key, ['name', 'value']) || Str::startsWith($key, ['x-bind:value', 'x-model', 'wire:model']);
    });
    $label = $attributes->except(array_keys($input->all()))->class([
        //
        // 'has-[:focus-visible]:outline has-[:active]:outline',
        \Elegantly\Kit\Facades\Kit::button()->color($colorChecked)->checked(),
    ]);
@endphp

<x-kit::button tag="label" :attributes="$label">
    <x-slot:before>
        <input type="{{ $type }}" {{ $input }}
            class="peer/input pointer-events-none absolute left-0 top-0 size-full appearance-none opacity-0"
            @checked($checked) @disabled($disabled)>
    </x-slot:before>

    @if ($icon?->hasActualContent())
        <x-slot:icon :attributes="$icon?->attributes"> {{ $icon }} </x-slot:icon>
    @endif

    {{ $slot }}

    @if ($iconRight?->hasActualContent())
        <x-slot:icon-right :attributes="$iconRight?->attributes"> {{ $iconRight }} </x-slot:icon-right>
    @endif
</x-kit::button>
