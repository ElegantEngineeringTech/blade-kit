@props([
    'size' => 'base',
    'icon' => null,
    'iconRight' => null,
    'content' => null,
    'offset' => true,
    'loader' => null,
    'loading' => false,
    'badge' => null,
    'extra' => null,
])

@php
    $target = $attributes->wire('target')->value;
@endphp

<x-kit::button.base :attributes="$attributes->when(
    $target,
    fn($a) => $a->merge([
        'wire:loading.attr' => 'disabled',
        'wire:loading.class' => 'pointer-events-none',
    ]),
)" :size="$size">
    @if ($icon)
        <span @class([
            'relative shrink-0 leading-none',
            '-mx-1' => $offset,
            \Elegantly\Kit\Facades\Kit::button()->size($size)->icon(),
            is_object($icon) ? $icon->attributes->get('class') : null,
        ])>
            @if (is_string($icon))
                @svg($icon)
            @else
                {{ $icon }}
            @endif

            @if ($badge)
                <x-kit::button.badge :count="$badge" />
            @endif
        </span>
    @endif

    @if ($slot->hasActualContent() || $content)
        <span @class([
            'relative',
            'inline-flex min-w-0',
            'ml-2' => $icon && $offset,
            'mr-2' => $iconRight && $offset,
            $content?->attributes->get('class'),
        ])>
            {{ $content ?? $slot }}

            @if (!$icon && $badge)
                <x-kit::button.badge :count="$badge" />
            @endif
        </span>
    @endif

    @if ($iconRight)
        <span @class([
            'relative shrink-0 leading-none',
            '-mx-1' => $offset,
            \Elegantly\Kit\Facades\Kit::button()->size($size)->icon(),
            is_object($iconRight) ? $iconRight->attributes->get('class') : null,
        ])>
            @if (is_string($iconRight))
                @svg($iconRight)
            @else
                {{ $iconRight }}
            @endif
        </span>
    @endif

    @if ($target || $loading)
        <x-kit::button.loader :loading="$loading"
            wire:target="{{ $target }}">{{ $loader }}</x-kit::buttons.loader>
    @endif

    {!! $extra !!}
</x-kit::button.base>
