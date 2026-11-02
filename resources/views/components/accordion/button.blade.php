@blaze()

@props([
    'iconRight' => null,
])

<x-kit::button :attributes="$attributes" :icon-right="$iconRight" x-on:click="expanded = !expanded"
    x-bind:aria-expanded="expanded" x-bind:aria-controls="$id('accordion')">
    {{ $slot }}
</x-kit::button>
