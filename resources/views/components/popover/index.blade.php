@props([
    'xData' => '{}',
])

<div {{ $attributes->class(['']) }} x-data="{
    open: false,
    {!! str($xData)->ltrim('{')->rtrim('}') !!}
}">
    {{ $slot }}
</div>
