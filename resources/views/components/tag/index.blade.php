@props([
    'size' => '2xs',
    'icon' => null,
    'iconRight' => null,
    'button' => null,
    'content' => null,
    'truncate' => false,
    'unoffset' => false,
])

<x-kit::tag.base :attributes="$attributes->class([
    'shrink-0' => !$truncate,
])" :size="$size">
    @if ($icon)
        @php
            $iconAttributes = is_object($icon) ? $icon->attributes : new \Illuminate\View\ComponentAttributeBag();
        @endphp
        <x-kit::tag.icon :icon="$icon" :unoffset="$unoffset" :size="$size" :attributes="$iconAttributes" />
    @endif

    @if ($slot->hasActualContent() || $content)
        <span @class([
            'inline-block grow text-center',
            'truncate' => $truncate,
            'ml-2' => $icon,
            'mr-2' => $iconRight,
            'mr-1' => $button,
            $content?->attributes->get('class'),
        ])>
            {{ $content ?? $slot }}
        </span>
    @endif

    @if ($iconRight)
        @php
            $iconAttributes = is_object($icon) ? $iconRight->attributes : new \Illuminate\View\ComponentAttributeBag();
        @endphp
        <x-kit::tag.icon :icon="$iconRight" :unoffset="$unoffset" :size="$size" :attributes="$iconAttributes" />
    @endif

    @if ($button)
        <span @class([\Elegantly\Kit\Facades\Kit::tag()->size($size)->button()])>
            {{ $button }}
        </span>
    @endif
</x-kit::tag.base>
