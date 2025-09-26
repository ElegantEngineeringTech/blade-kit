@props([
    'tag' => null,
    'type' => 'button',
    'size' => 'base',
    'color' => null,
    'colorChecked' => null,
    'disabled' => false,
    'tooltip' => null,
    'download' => false,
])

{{-- blade-formatter-disable --}}
<{!! $tag ?? 'button' !!} {!! $attributes->class(['el-button el-spacing el-text el-bg el-ring el-outline el-border']) !!}
    data-size="{{ $size }}" data-color="{{ $color }}" @if($colorChecked) data-color-checked="{{ $colorChecked }}" @endif
    @disabled($disabled) @if ($tag === 'button') type="{{ $type }}" @endif
    @if ($tooltip) x-tooltip.raw="{{ $tooltip }}" @endif
    @if (is_string($download)) download="{{ $download }}" @elseif($download) download @endif>
    {{ $slot }}
</{!! $tag ?? 'button' !!}>
{{-- blade-formatter-enable --}}
