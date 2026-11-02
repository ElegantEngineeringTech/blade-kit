@blaze()

@props([
    'count' => 0,
    'max' => 99,
    'color' => 'rose',
    'label' => null,
])

@php
    $display = match (true) {
        $count > $max => "{$max}+",
        $count < -$max => "-{$max}+",
        $count > 1 || $count < 0 => $count,
        default => null,
    };
@endphp

<span {{ $attributes->class([
    'h-5 min-w-5 px-0.5' => $display !== null,
    'size-3' => $display === null,
    'el-badge el-text el-bg el-outline',
]) }} data-color="{{ $color }}">
    @if ($display !== null)
        <span @if ($label) aria-hidden="true" @endif>{{ $display }}</span>
    @endif

    @if ($label)
        <span class="sr-only">{{ $label }}</span>
    @endif
</span>
