@props([
    'size' => 'xl',
])

<div {!! $attributes->class([
    'mx-auto',
    'max-w-(--breakpoint-sm)' => $size === 'sm',
    'max-w-(--breakpoint-md)' => $size === 'md',
    'max-w-(--breakpoint-lg)' => $size === 'lg',
    'max-w-(--breakpoint-xl)' => $size === 'xl',
]) !!}>
    {{ $slot }}
</div>
