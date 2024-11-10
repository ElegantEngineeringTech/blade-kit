@props([
    'error' => null,
    'tooltip' => null,
    'help' => null,
    'label' => null,
    'for' => null,
])

<div {!! $attributes->class(['flex flex-col gap-1.5']) !!} @if ($tooltip) x-tooltip.raw="{{ $tooltip }}" @endif>

    @if ($label)
        <x-kit::field.label :for="$for">
            {!! $label !!}
        </x-kit::field.label>
    @endif

    {{ $slot }}

    @if ($help)
        <x-kit::field.help>
            {!! $help !!}
        </x-kit::field.help>
    @endif

    @if ($error)
        <x-kit::field.error :error="$error" />
    @endif
</div>
