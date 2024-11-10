@props(['error'])

@error($error)
    <p {!! $attributes->class(['text-sm text-rose-500 font-semibold']) !!}>
        {{ $message }}
    </p>
@enderror
