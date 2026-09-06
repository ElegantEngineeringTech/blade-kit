@blaze()

@props([
    'disabled' => false,
    'checked' => false,
    'required' => false,
    'readonly' => false,
    'type' => 'checkbox',
    'value' => 'on',
])

@php
    use function Illuminate\Support\enum_value;
@endphp

<input {!! $attributes->class(['el-checkbox']) !!} type="{{ $type }}" value="{{ enum_value($value) }}" @disabled($disabled)
    @checked($checked) @required($required) @readonly($readonly)>
