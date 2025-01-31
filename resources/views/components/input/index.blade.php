@props([
    'icon' => null,
    'iconRight' => null,
    'class' => null,
    'classInput' => null,
    'style' => null,
    'size' => 'base',
    'color' => 'white',
])

<div @class([$class, 'relative w-full']) @style($style)>

    @if ($icon)
        @php
            $iconAttributes = is_object($icon) ? $icon->attributes : new \Illuminate\View\ComponentAttributeBag();
        @endphp

        <x-kit::input.icon :icon="$icon" :size="$size" :color="$color" :attributes="$iconAttributes->class(['left-0'])" />
    @endif

    <x-kit::input.base :size="$size" :color="$color" :attributes="$attributes->class([
        \Elegantly\Kit\Facades\Kit::input()->size($size)->spacingIconLeft()->value() => $icon,
        \Elegantly\Kit\Facades\Kit::input()->size($size)->spacingIconRight()->value() => $iconRight,
        'rounded-[inherit]',
        'w-full',
        $classInput,
    ])" />

    @if ($iconRight)
        @php
            $iconAttributes = is_object($icon) ? $iconRight->attributes : new \Illuminate\View\ComponentAttributeBag();
        @endphp

        <x-kit::input.icon :icon="$iconRight" :size="$size" :color="$color" :attributes="$iconAttributes->class(['right-0'])" />
    @endif

</div>
