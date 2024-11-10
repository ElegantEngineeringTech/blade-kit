@props([
    'count' => 0,
    'max' => 99,
    'color' => 'rose',
])

<span {!! $attributes->class([
    'size-5' => $count > 1,
    'size-3' => $count <= 1,
    \Elegantly\Kit\Ui\Base::make()->color($color)->font()->background()->outline(),
    'flex items-center justify-center rounded-full border-2 border-white text-[0.5rem] font-bold leading-none',
]) !!}>
    {{ $count > 1 ? min($count, $max) : null }}
</span>
