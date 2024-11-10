@props([
    'size' => 'xl',
])

<div {!! $attributes->class([
    'mx-auto',
    'max-w-screen-sm' => $size === 'sm',
    'max-w-screen-md' => $size === 'md',
    'max-w-screen-lg' => $size === 'lg',
    'max-w-screen-xl' => $size === 'xl',
]) !!}>
    {{ $slot }}
</div>
