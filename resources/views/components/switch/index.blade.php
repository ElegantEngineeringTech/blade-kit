@blaze()

@props([
    'disabled' => false,
    'checked' => false,
    'required' => false,
    'color' => 'emerald',
    'type' => 'checkbox',
])

<input {{ $attributes->class(['el-switch'])->merge($type === 'checkbox' ? ['role' => 'switch'] : []) }} data-color="{{ $color }}" type="{{ $type }}" @disabled($disabled)
    @checked($checked) @required($required) />
