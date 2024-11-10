@props([
    'iconRight' => null,
])

<x-kit::button :attributes="$attributes" :icon-right="$iconRight" x-on:click="expanded = !expanded">
    {{ $slot }}
</x-kit::button>
