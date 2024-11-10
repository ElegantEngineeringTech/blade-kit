@props([
    'checked' => false,
    'disabled' => false,
    'colorChecked' => null,
    'type' => 'radio',
])

@php
    $input = $attributes->filter(function ($value, $key) {
        return in_array($key, ['name', 'value']) || Str::startsWith($key, ['x-model', 'wire:model']);
    });
    $label = $attributes
        ->except(array_keys($input->all()))
        ->class([\Elegantly\Kit\Facades\Kit::button()->color($colorChecked)->checked()]);
@endphp

<x-kit::button tag="label" :attributes="$label">
    <x-slot:extra>
        <input type="{{ $type }}" {{ $input }}
            class="size-full pointer-events-none absolute left-0 top-0 appearance-none opacity-0"
            @checked($checked) @disabled($disabled)>
    </x-slot:extra>

    {{ $slot }}
</x-kit::button>
