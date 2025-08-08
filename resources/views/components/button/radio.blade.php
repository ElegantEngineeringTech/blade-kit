@props([
    'checked' => false,
    'disabled' => false,
    'colorChecked' => 'black',
    'type' => 'radio',
    'icon' => null,
    'iconRight' => null,
    'content' => null,
    'required' => false,
])

@php
    $input = $attributes->filter(function ($value, $key) {
        if (in_array($key, ['name', 'value'])) {
            return true;
        }
        return Str::startsWith($key, ['x-bind:value', 'x-bind:checked', 'x-bind:disabled', 'x-model', 'wire:model']);
    });
    $label = $attributes->except(array_keys($input->getAttributes()))->class([
        //
        // 'has-focus-visible:outline has-active:outline',
        \Elegantly\Kit\Facades\Kit::button()->color($colorChecked)->checked(),
    ]);
@endphp

<x-kit::button tag="label" :attributes="$label">
    <x-slot:before>
        <input type="{{ $type }}" {{ $input }}
            class="peer/input pointer-events-none absolute left-0 top-0 size-full appearance-none opacity-0"
            @checked($checked) @disabled($disabled) @required($required)>
    </x-slot:before>

    @if ($icon?->hasActualContent())
        <x-slot:icon :attributes="$icon?->attributes"> {{ $icon }} </x-slot:icon>
    @endif

    @if ($content?->hasActualContent())
        <x-slot:content :attributes="$content?->attributes"> {{ $content }} </x-slot:content>
    @else
        {{ $slot }}
    @endif

    @if ($iconRight?->hasActualContent())
        <x-slot:icon-right :attributes="$iconRight?->attributes"> {{ $iconRight }} </x-slot:icon-right>
    @endif
</x-kit::button>
