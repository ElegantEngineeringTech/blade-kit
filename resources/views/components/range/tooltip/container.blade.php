<div {{ $attributes->class(['el-range-tooltip-container']) }} x-bind:style="{
    'left': `${progress*100}%`
}">
    {{ $slot }}
</div>
