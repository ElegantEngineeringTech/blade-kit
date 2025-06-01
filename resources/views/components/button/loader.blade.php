@props([
    'loading' => false,
])

<span {!! $attributes->class([
    'absolute left-0 top-0 flex gap-2 h-full w-full items-center justify-center rounded-[inherit] bg-inherit',
]) !!} @if (!$loading) wire:loading.flex @endif>
    <span class="animate-spin-loader size-4 rounded-full border-2 border-r-transparent border-t-transparent"></span>

    {{ $slot }}
</span>
