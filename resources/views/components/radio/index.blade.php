@props([
    'disabled' => false,
    'checked' => false,
    'required' => false,
    'type' => 'radio',
])

<input {!! $attributes->class(['el-radio']) !!} type="{{ $type }}" @disabled($disabled) @checked($checked)
    @required($required)>
