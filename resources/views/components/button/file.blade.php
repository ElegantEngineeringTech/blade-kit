@props([
    'name' => null,
    'multiple' => false,
    'accept' => null,
])

<x-kit::button tag="label" :attributes="$attributes">
    <input class="size-full pointer-events-none absolute left-0 top-0 opacity-0" type="file" name="{{ $name }}"
        @if ($multiple) multiple @endif
        @if (is_string($accept)) accept="{{ $accept }}" @elseif(is_array($accept)) accept="{{ implode(',', $accept) }}" @endif>
    <span class="relative">
        {{ $slot }}
    </span>
</x-kit::button>
