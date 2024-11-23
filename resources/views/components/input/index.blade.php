@props([
    'icon' => null,
    'iconRight' => null,
    'class' => null,
    'classInput' => null,
    'style' => null,
    'size' => 'base',
    'color' => 'white',
])

@php
    $input = $attributes->whereStartsWith(['wire:', 'x-on:', '']);
@endphp

<div @class([$class, 'relative w-full']) @style($style)>

    @if ($icon)
        <span @class([
            'absolute left-0 leading-none pointer-events-none',
            \Elegantly\Kit\Facades\Kit::input()->size($size)->color($color)->icon(),
            is_object($icon) ? $icon->attributes->get('class') : null,
        ])>
            @if (is_string($icon))
                @svg($icon)
            @else
                {{ $icon }}
            @endif
        </span>
    @endif

    <x-kit::input.base :size="$size" :color="$color" :attributes="$attributes->class([
        \Elegantly\Kit\Facades\Kit::input()->size($size)->spacingIconLeft()->value() => $icon,
        \Elegantly\Kit\Facades\Kit::input()->size($size)->spacingIconRight()->value() => $iconRight,
        'rounded-[inherit]',
        'w-full',
        $classInput,
    ])" />

    @if ($iconRight)
        <span @class([
            'absolute right-0 leading-none pointer-events-none',
            \Elegantly\Kit\Facades\Kit::input()->size($size)->color($color)->icon(),
            is_object($iconRight) ? $iconRight->attributes->get('class') : null,
        ])>
            @if (is_string($iconRight))
                @svg($iconRight)
            @else
                {{ $iconRight }}
            @endif
        </span>
    @endif
</div>
