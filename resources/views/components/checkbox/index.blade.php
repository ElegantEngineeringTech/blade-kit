@props([
    'disabled' => false,
    'checked' => false,
    'required' => false,
    'type' => 'checkbox',
])

<input {!! $attributes->class(['el-checkbox']) !!} type="{{ $type }}" @disabled($disabled) @checked($checked)
    @required($required)>
