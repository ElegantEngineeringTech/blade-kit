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
    'flex-shrink-0' => !$truncate,
])" :size="$size">
    @if ($icon)
        <span @class([
            \Elegantly\Kit\Facades\Kit::tag()->size($size)->icon(),
            '-mx-1' => !$unoffset,
            'flex-shrink-0 inline-block leading-none',
        ])>
            @if (is_string($icon))
                @svg($icon)
            @else
                {{ $icon }}
            @endif
        </span>
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
        <span @class([
            \Elegantly\Kit\Facades\Kit::tag()->size($size)->icon(),
            '-mx-1' => !$unoffset,
            'flex-shrink-0 leading-none',
        ])>
            @if (is_string($iconRight))
                @svg($iconRight)
            @else
                {{ $iconRight }}
            @endif
        </span>
    @endif

    @if ($button)
        <span @class([\Elegantly\Kit\Facades\Kit::tag()->size($size)->button()])>
            {{ $button }}
        </span>
    @endif
</x-kit::tag.base>
