@props([
    'color' => 'white',
])

<div
    {{ $attributes->class([
        'flex',
        'outline-2 outline-offset-2',
        'has-focus-visible:outline',
        \Elegantly\Kit\Facades\Kit::input()->color($color)->font()->background()->border()->ring()->outline(),
    ]) }}>

    {{ $slot }}

</div>
