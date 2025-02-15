@props([
    'xData' => '{}',
])

<div {{ $attributes->class(['']) }} x-data="{
    open: true,
    ...{!! $xData !!}
}">
    {{ $slot }}
</div>
