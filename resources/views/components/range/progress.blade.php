@blaze(fold: true)

<div {{ $attributes->class('el-range-progress') }} x-bind:style="{
    'width': `${progress*100}%`
}"></div>
