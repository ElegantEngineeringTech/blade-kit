@props([
    'tag' => 'button',
    'type' => 'button',
    'size' => 'base',
    'color' => null,
    'disabled' => false,
    'tooltip' => null,
    'download' => false,
])

<{!! $tag !!} {!! $attributes->class([
    \Elegantly\Kit\Facades\Kit::button()->size($size)->color($color)->font()->background()->outline()->border()->ring()->spacing()->hover(),
    'shrink-0 relative align-middle',
    'inline-flex items-center',
    'outline-2 outline-offset-2',
    'transition-colors',
    'cursor-pointer',
    'disabled:cursor-not-allowed disabled:opacity-50',
    'focus-visible:outline active:outline',
]) !!} @disabled($disabled)
    @if ($tag === 'button') type="{{ $type }}" @endif
    @if ($tooltip) x-tooltip.raw="{{ $tooltip }}" @endif
    @if (is_string($download)) download="{{ $download }}" @elseif($download) download @endif>
    {{ $slot }}
    {{-- blade-formatter-disable --}}
</{!! $tag !!}>
{{-- blade-formatter-enable --}}
