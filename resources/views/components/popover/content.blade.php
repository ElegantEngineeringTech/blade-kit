@blaze()

@props([
    'offset' => 4,
    'placement' => 'bottom',
    'animation' => 'default',
    'role' => 'dialog',
])

<div {{ $attributes->class(['el-popover']) }} data-placement="{{ $placement }}" data-animation="{{ $animation }}"
    role="{{ $role }}" x-cloak x-show="open" x-trap="trap && open" x-on:click.outside="hide" x-on:click.self="hide"
    x-on:keydown.escape.prevent="hide" x-anchor.{{ $placement }}.offset.{{ $offset }}="$refs.trigger">
    {{ $slot }}
</div>
