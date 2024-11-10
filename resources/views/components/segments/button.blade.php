@props([
    'color' => 'white',
    'iconRight' => null,
])

<x-kit::button.radio :color-checked="$color" :icon-right="$iconRight" :attributes="$attributes->class([
    'justify-center grow', //
    'has-[:checked]:shadow-sm has-[:focus-visible]:outline',
])">
    {{ $slot }}
</x-kit::button.radio>
