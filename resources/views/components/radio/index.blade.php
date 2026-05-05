@blaze()

@props([
    'disabled' => false,
    'checked' => false,
    'required' => false,
    'readonly' => false,
    'type' => 'radio',
])

<input {!! $attributes->class(['el-radio']) !!} type="{{ $type }}" @disabled($disabled) @checked($checked)
    @required($required) @readonly($readonly)>
