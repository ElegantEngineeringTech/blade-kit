@props([
    'icon' => null,
    'iconRight' => null,
    'class' => null,
    'style' => null,
])

<div {!! $attributes->class(['relative w-full', $class]) !!} @style($style)>

    @if ($icon)
        <span class="absolute left-0 top-0 flex h-full items-center justify-center pl-1.5 text-gray-400">
            @svg($icon, [
                'class' => 'size-5 p-0.5',
            ])
        </span>
    @endif

    <x-kit::input.base paddingless :attributes="$attributes->class([
        'rounded-[inherit]',
        'pl-3.5' => !$icon,
        'pl-8' => $icon,
        'pr-3.5' => !$iconRight,
        'pr-8' => $iconRight,
        'py-2',
        'w-full',
    ])" />
</div>
