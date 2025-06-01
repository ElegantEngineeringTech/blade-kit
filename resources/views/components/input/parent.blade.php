@props([
    'color' => 'white',
])

<div
    {{ $attributes->class([
        'flex',
        'outline-offset-2',
        'has-focus-visible:outline-2',
        \Elegantly\Kit\Facades\Kit::input()->color($color)->font()->background()->border()->ring()->outline(),
    ]) }}>

    {{ $slot }}

</div>
