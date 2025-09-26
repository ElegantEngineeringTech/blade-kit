@props([
    'disabled' => false,
    'required' => false,
    'tooltip' => null,
    'size' => 'base',
    'color' => 'white',
])

<select {!! $attributes->class(['el-select el-text el-bg el-outline el-ring']) !!} data-size="{{ $size }}" data-color="{{ $color }}"
    @disabled($disabled) @required($required)
    @if ($tooltip) x-tooltip.raw="{!! $tooltip !!}" @endif>
    {{ $slot }}
</select>
