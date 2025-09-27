@props([
    'tag' => null,
    'size' => 'base',
    'colorChecked' => 'black',
    'icon' => null,
    'iconRight' => null,
    'content' => null,
    'offset' => true,
    'loader' => null,
    'loading' => false,
    'badge' => null,
    'before' => null,
    'input' => null,
    'after' => null,
])

@php
    $target = $attributes->get('wire:target');
    $tag = $tag ?? ($input ? 'label' : null);
    $colorChecked = $input ? $colorChecked : null;
@endphp

<x-kit::button.base :attributes="$attributes->when(
    $target,
    fn($a) => $a->merge([
        'wire:loading.attr' => 'disabled',
        'wire:loading.class' => 'pointer-events-none',
    ]),
)" :size="$size" :color-checked="$colorChecked" :tag="$tag">
    {!! $before !!}
    {!! $input !!}

    @if ($icon)
        @php
            $iconAttributes = is_object($icon) ? $icon->attributes : new \Illuminate\View\ComponentAttributeBag();
        @endphp

        <x-kit::button.icon :icon="$icon" :offset="$offset" :size="$size" :badge="$badge" :attributes="$iconAttributes" />
    @endif

    @if ($slot->hasActualContent() || $content)
        @php
            $contentAttributes = is_object($content)
                ? $content->attributes
                : new \Illuminate\View\ComponentAttributeBag();
        @endphp
        <span
            {{ $contentAttributes->class([
                'relative',
                'inline-flex min-w-0',
                'ml-2' => $icon && $offset,
                'mr-2' => $iconRight && $offset,
            ]) }}>
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

    {!! $after !!}
</x-kit::button.base>
