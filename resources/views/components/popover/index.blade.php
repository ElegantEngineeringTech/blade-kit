@props([
    'xData' => '{}',
])

<div {{ $attributes }} x-data="{
    open: false,
    {!! str($xData)->ltrim('{')->rtrim('}') !!}
}">
    {{ $slot }}
</div>
