@props([
    'color' => 'white',
    'icon' => null,
    'iconRight' => null,
])

<x-kit::button.radio :color-checked="$color" :attributes="$attributes->class([
    'justify-center grow', //
    'has-[:checked]:shadow-sm has-[:focus-visible]:outline',
])">
    @if ($icon?->hasActualContent())
        <x-slot:icon :attributes="$icon?->attributes"> {{ $icon }} </x-slot:icon>
    @endif

    {{ $slot }}

    @if ($iconRight?->hasActualContent())
        <x-slot:icon-right :attributes="$iconRight?->attributes"> {{ $iconRight }} </x-slot:icon-right>
    @endif
</x-kit::button.radio>
