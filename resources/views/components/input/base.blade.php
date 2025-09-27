@props([
    'size' => 'base',
    'color' => null,
    'disabled' => false,
])

<input {{ $attributes->class(['el-input el-bg el-outline el-ring']) }} data-color="{{ $color }}"
    data-size="{{ $size }}" @disabled($disabled) />
