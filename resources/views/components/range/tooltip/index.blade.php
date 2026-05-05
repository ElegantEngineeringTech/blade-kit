<div {{ $attributes->class(['el-range-tooltip']) }}>
    @if ($slot)
        <span x-text="value"></span>
    @else
        {{ $slot }}
    @endif
</div>
