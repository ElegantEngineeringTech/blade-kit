@props([
    'tag' => null,
    'type' => null,
    'size' => 'base',
    'color' => null,
    'colorChecked' => null,
    'disabled' => false,
    'download' => false,
    'tooltip' => null,
])

@php
    $_tag = $tag ?? 'button';
    $_type = $type ?? ($_tag === 'button' ? 'button' : null);
@endphp

{{-- blade-formatter-disable --}}
<{!! $_tag !!} {!! $attributes->class(['el-button el-spacing el-text el-bg el-ring el-outline el-border']) !!}
    data-size="{{ $size }}" data-color="{{ $color }}" @if($colorChecked) data-color-checked="{{ $colorChecked }}" @endif
    @disabled($disabled) @if ($_type) type="{{ $_type }}" @endif
    @if ($tooltip) x-tooltip.raw="{{ $tooltip }}" @endif
    @if (is_string($download)) download="{{ $download }}" @elseif($download) download @endif>
    {{ $slot }}
</{!! $_tag !!}>
{{-- blade-formatter-enable --}}
