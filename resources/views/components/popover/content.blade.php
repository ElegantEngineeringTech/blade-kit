@props([
    'position' => 'bottom-start',
    'offset' => 5,
])

<div {{ $attributes }} x-cloak x-show="open" x-trap="open"
    x-anchor.{!! $position !!}.offset.{!! $offset !!}="$refs.trigger" x-on:click.outside="open = false"
    x-on:keyup.escape.prevent="open = false">
    {{ $slot }}
</div>
