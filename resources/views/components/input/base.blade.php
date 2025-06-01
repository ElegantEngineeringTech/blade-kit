@props([
    'disabled' => false,
    'required' => false,
    'autofocus' => false,
    'size' => 'base',
    'paddingless' => false,
    'color' => 'white',
    'autocomplete' => null,
    'type' => 'text',
])

<input type="{{ $type }}"
    {{ $attributes->class([
        \Elegantly\Kit\Facades\Kit::input()->size($size)->color($color)->font()->spacing()->border()->ring()->background()->outline(),
        'inline-block w-full ring-inset focus:outline-2 focus-visible:outline-2',
    ]) }}
    @if ($autofocus) autofocus @endif @disabled($disabled) @required($required)
    @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
    @if ($autocomplete === 'off') data-1p-ignore data-bwignore
    data-lpignore="true" data-form-type="other" @endif />
