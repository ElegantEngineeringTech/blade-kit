@props([
    'color' => 'sky-light',
    'size' => 'lg',
])

<div {{ $attributes->class(['el-alert el-spacing el-text el-bg el-ring el-outline el-border el-shadow']) }}
    data-color="{{ $color }}" data-size="{{ $size }}">
    @isset($icon)
        <span class="el-alert-icon -mx-1">
            {{ $icon }}
        </span>
    @endisset

    <div>
        {{ $slot }}
    </div>
</div>
