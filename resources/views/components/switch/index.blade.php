@props([
    'class' => null,
    'style' => null,
    'id' => null,
])

<label {!! $attributes->class(['flex items-start gap-2 cursor-pointer', $class]) !!} @style($style) @if ($id) for="{{ $id }}" @endif>
    <span class="relative">
        <x-kit::switch.base :attributes="$attributes" :id="$id" />
    </span>
    {{ $slot }}
</label>
