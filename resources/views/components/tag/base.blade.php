@props([
    'tag' => 'span',
    'color' => null,
    'size' => '2xs',
    'paddingless' => false,
    'tooltip' => null,
])

{{-- blade-formatter-disable --}}
<{!! $tag !!} {{ $attributes->class(['el-tag el-spacing el-text el-bg el-ring el-outline el-border']) }}
    data-size="{{ $size }}" data-color="{{ $color }}"
    @if ($tooltip) x-tooltip.raw="{!! $tooltip !!}" @endif>
    {{ $slot }}
</{!! $tag !!}>
{{-- blade-formatter-enable --}}
