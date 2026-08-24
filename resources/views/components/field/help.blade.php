@blaze(fold: true)

<p {!! $attributes->class(['text-sm text-gray-600 [&_a]:underline']) !!}>
    {{ $slot }}
</p>
