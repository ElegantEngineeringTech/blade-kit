@props([
    'color' => 'gray',
])

<div
    {{ $attributes->class([
        'flex p-1',
        \Elegantly\Kit\Facades\Kit::base()->color($color)->background(),
        //
    ]) }}>
    {{ $slot }}
</div>
