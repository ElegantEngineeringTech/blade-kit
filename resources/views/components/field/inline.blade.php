@blaze()

@props([
    'error' => null,
    'tooltip' => null,
    'help' => null,
    'label' => null,
    'for' => null,
])

<div {!! $attributes->class(['flex gap-1.5 items-start']) !!} @if ($tooltip) x-tooltip.raw="{{ $tooltip }}" @endif>

    <div class="mr-auto">
        @if ($label)
            <x-kit::field.label :for="$for">
                {!! $label !!}
            </x-kit::field.label>
        @endif

        @if ($help)
            <x-kit::field.help>
                {!! $help !!}
            </x-kit::field.help>
        @endif

        @if ($error)
            <x-kit::field.error :error="$error" />
        @endif
    </div>

    {{ $slot }}

</div>
