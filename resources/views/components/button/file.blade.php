@props([
    'name' => null,
    'multiple' => false,
    'accept' => null,
    'icon' => null,
    'iconRight' => null,
])


@php
    $input = $attributes->filter(function ($value, $key) {
        return in_array($key, ['name', 'value']) || Str::startsWith($key, ['x-bind:value', 'x-model', 'wire:model']);
    });
    $label = $attributes->except(array_keys($input->getAttributes()));
@endphp

<x-kit::button tag="label" :attributes="$label">
    <x-slot:before>
        <input class="pointer-events-none absolute left-0 top-0 size-full opacity-0" type="file" {{ $input }}
            @if ($multiple) multiple @endif
            @if (is_string($accept)) accept="{{ $accept }}" @elseif(is_array($accept)) accept="{{ implode(',', $accept) }}" @endif>
    </x-slot:before>

    @if ($icon?->hasActualContent())
        <x-slot:icon :attributes="$icon?->attributes"> {{ $icon }} </x-slot:icon>
    @endif

    {{ $slot }}

    @if ($iconRight?->hasActualContent())
        <x-slot:icon-right :attributes="$iconRight?->attributes"> {{ $iconRight }} </x-slot:icon-right>
    @endif
</x-kit::button>
