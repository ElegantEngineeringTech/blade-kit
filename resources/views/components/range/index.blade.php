@props([
    'disabled' => false,
    'required' => false,
    'color' => 'black',
])

<input {{ $attributes->class(['el-range']) }} type="range" data-color="{{ $color }}" @disabled($disabled)
    @required($required) />
