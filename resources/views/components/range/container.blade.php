@props(['color' => 'black'])

<div {{ $attributes->class(['el-range-container']) }} x-data="{
    value: 0,
    get min() {
        return parseInt(this.input.min || 0);
    },
    get max() {
        return parseInt(this.input.max || 1);
    },
    get step() {
        return parseInt(this.input.step || 1);
    },
    get input() {
        return this.$refs.input;
    },
    get progress() {
        return (this.value - this.min) / (this.max - this.min);
    },
    get ticks() {
        return this.range(this.min, this.max, this.step);
    },
    range(min, max, step = 1) {
        const len = Math.floor((max - min) / step) + 1;
        return Array.from({ length: Math.max(len, 0) }, (_, i) => min + i * step);
    },
    init() {
        this.value = this.$refs.input.value;
    },
}" x-modelable="value"
    data-color="{{ $color }}">
    {{ $slot }}
</div>
