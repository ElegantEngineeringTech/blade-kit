@props([])

<div {{ $attributes->class(['flex items-center justify-center max-sm:!fixed max-sm:!left-0 max-sm:!top-0 max-sm:bottom-0 max-sm:right-0 max-sm:bg-black/30']) }}
    x-cloak x-show="open" x-trap="open" x-on:click.outside="open = false" x-on:click.self="open = false"
    x-on:keyup.escape.prevent.stop="open = false">
    {{ $slot }}
</div>
