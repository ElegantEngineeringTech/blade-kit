@props([
    'disabled' => false,
    'checked' => false,
    'required' => false,
    'color' => 'emerald',
])

<input {!! $attributes->class([
    'appearance-none', // hide on safari
    'w-10 h-0 cursor-pointer inline-block',
    'border-0 dark:border-0',
    'focus:ring-offset-transparent dark:focus:ring-offset-transparent',
    'focus:ring-transparent dark:focus:ring-transparent',
    'focus-within:ring-0 dark:focus-within:ring-0',
    'focus:shadow-none dark:focus:shadow-none',
    'focus:before:outline-2 before:outline-offset-2',
    'after:absolute before:absolute',
    'after:top-0 before:top-0',
    'after:block before:inline-block',
    'before:rounded-full after:rounded-full',
    'after:w-5 after:h-5 after:mt-0.5 after:ml-0.5',
    'after:shadow-md after:duration-100',
    'before:w-10 before:h-full',
    'before:shadow-[inset_0_0_#000]',
    'after:bg-white dark:after:bg-gray-50',
    'dark:before:bg-gray-600',
    'checked:after:duration-300 checked:after:translate-x-4',
    'disabled:cursor-not-allowed disabled:opacity-50',
    \Elegantly\Kit\Facades\Kit::switch()->color($color)->background()->outline(),
]) !!} type="checkbox" @disabled($disabled) @checked($checked)
    @required($required)>
