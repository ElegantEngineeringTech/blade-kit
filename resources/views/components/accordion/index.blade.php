@props([
    'expanded' => false,
    'button' => null,
])

<div {{ $attributes }} x-data="{
    expanded: {{ Js::from($expanded) }},
}">

    @if (is_string($button))
        <x-kit::accordion.button class="w-full font-semibold" icon-right="heroicon-o-chevron-down">
            {!! $button !!}
        </x-kit::accordion.button>
    @else
        {!! $button !!}
    @endif

    <div x-show="expanded" x-collapse x-cloak class="overflow-auto">
        {{ $slot }}
    </div>
</div>
