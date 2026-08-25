@blaze()

@props([
    'offset' => 4,
    'placement' => 'bottom',
    'animation' => 'default',
    'role' => 'dialog',
    'noautofocus' => true,
    'noreturn' => false,
    'noscroll' => false,
])

@php
    $modifiers = '';

    if ($noautofocus) {
        $modifiers .= '.noautofocus';
    }

    if ($noreturn) {
        $modifiers .= '.noreturn';
    }

    if ($noscroll) {
        $modifiers .= '.noscroll';
    }
@endphp

<div {{ $attributes->class(['el-popover']) }} data-placement="{{ $placement }}" data-animation="{{ $animation }}"
    role="{{ $role }}" x-cloak x-show="open" x-trap{{ $modifiers }}="trap && open" x-on:click.outside="hide"
    x-on:keydown.escape.prevent="hide" x-anchor.{{ $placement }}.offset.{{ $offset }}="$refs.trigger">
    {{ $slot }}
</div>
