@props(['icon', 'size', 'unoffset'])

<span
    {{ $attributes->class([
        \Elegantly\Kit\Facades\Kit::tag()->size($size)->icon(),
        '-mx-1' => !$unoffset,
        'flex-shrink-0 inline-block leading-none',
    ]) }}>
    @if (is_string($icon))
        @svg($icon)
    @else
        {{ $icon }}
    @endif
</span>
