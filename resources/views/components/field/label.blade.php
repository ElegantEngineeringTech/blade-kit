@blaze(fold: true)

<label {!! $attributes->class(['block font-bold [&_a]:underline']) !!}>
    {{ $slot }}
</label>
