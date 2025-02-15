@props([
    'xData' => '{}',
])

<div {{ $attributes->class(['']) }} x-data="{
    open: false,
    ...{!! $xData !!}
}">
    {{ $slot }}
</div>
