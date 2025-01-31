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
        @php
            $iconAttributes = is_object($icon) ? $icon->attributes : new \Illuminate\View\ComponentAttributeBag();
        @endphp

        <x-kit::button.icon :icon="$icon" :offset="$offset" :size="$size" :badge="$badge" :attributes="$iconAttributes" />
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
        @php
            $iconAttributes = is_object($iconRight)
                ? $iconRight->attributes
                : new \Illuminate\View\ComponentAttributeBag();
        @endphp

        <x-kit::button.icon :icon="$iconRight" :offset="$offset" :size="$size" :attributes="$iconAttributes" />
    @endif

    @if ($target || $loading)
        <x-kit::button.loader :loading="$loading"
            wire:target="{{ $target }}">{{ $loader }}</x-kit::buttons.loader>
    @endif

    {!! $extra !!}
</x-kit::button.base>
