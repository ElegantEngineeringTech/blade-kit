@blaze()

@props([
    'size' => 'base',
    'color' => null,
    'disabled' => false,
])

<input {{ $attributes->class(['el-input el-text el-bg el-ring el-outline el-border']) }} data-color="{{ $color }}"
    data-size="{{ $size }}" @disabled($disabled) />
