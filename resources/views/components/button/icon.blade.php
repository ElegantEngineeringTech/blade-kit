@props(['icon', 'size', 'offset', 'badge' => null])

<span
    {{ $attributes->class([
        'relative shrink-0 leading-none',
        '-mx-1' => $offset,
        \Elegantly\Kit\Facades\Kit::button()->size($size)->icon(),
    ]) }}>
    @if (is_string($icon))
        @svg($icon)
    @else
        {{ $icon }}
    @endif

    @if ($badge)
        <x-kit::button.badge :count="$badge" />
    @endif
</span>
