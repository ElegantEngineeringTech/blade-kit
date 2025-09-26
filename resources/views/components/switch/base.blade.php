@props([
    'disabled' => false,
    'checked' => false,
    'required' => false,
    'color' => 'emerald',
])

<input {!! $attributes->class(['el-switch']) !!} data-color="{{ $color }}" type="checkbox" @disabled($disabled)
    @checked($checked) @required($required)>
