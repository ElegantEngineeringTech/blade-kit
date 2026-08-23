@blaze()

@props([
    'trap' => true,
    'xData' => '{}',
])

<div {{ $attributes }} x-data="{
    open: false,
    trap: @js($trap),
    toggle() {
        this.open = !this.open;
    },
    hide() {
        this.open = false;
    },
    show() {
        this.open = true;
    },
    {!! str($xData)->ltrim('{')->rtrim('}') !!}
}">
    {{ $slot }}
</div>
