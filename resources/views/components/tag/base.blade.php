@props([
    'color' => null,
    'size' => '2xs',
    'paddingless' => false,
    'tooltip' => null,
])

<span
    {{ $attributes->class([
        'rounded-full font-semibold',
        'relative align-middle',
        'inline-flex items-center',
        'whitespace-nowrap',
        \Elegantly\Kit\Facades\Kit::tag()->size($size)->color($color)->font()->background()->outline()->border()->ring()->spacing(),
    ]) }}
    @if ($tooltip) x-tooltip.raw="{!! $tooltip !!}" @endif>
    {{ $slot }}
</span>
