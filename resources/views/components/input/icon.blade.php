@props(['icon', 'size', 'color'])

<span
    {{ $attributes->class([
        'absolute leading-none pointer-events-none',
        \Elegantly\Kit\Facades\Kit::input()->size($size)->color($color)->icon(),
    ]) }}>
    @if (is_string($icon))
        @svg($icon)
    @else
        {{ $icon }}
    @endif
</span>
