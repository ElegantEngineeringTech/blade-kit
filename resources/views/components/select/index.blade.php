@props([
    'disabled' => false,
    'required' => false,
    'tooltip' => null,
    'size' => 'base',
    'color' => 'white',
])

<select {!! $attributes->class([
    \Elegantly\Kit\Facades\Kit::select()->size($size)->color($color)->font()->text()->spacing()->background()->outline(),
    'select-none bg-select bg-no-repeat appearance-none inline-block',
]) !!} @disabled($disabled) @required($required)
    @if ($tooltip) x-tooltip.raw="{!! $tooltip !!}" @endif>
    {{ $slot }}
</select>
