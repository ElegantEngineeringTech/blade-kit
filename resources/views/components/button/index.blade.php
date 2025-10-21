@props([
    'tag' => null,
    'size' => 'base',
    'colorChecked' => null,
    'icon' => null,
    'iconRight' => null,
    'content' => null,
    'offset' => true,
    'loader' => null,
    'badge' => null,
    'before' => null,
    'input' => null,
    'after' => null,
])

@php
    $target = $attributes->get('wire:target');
    $_tag = $tag ?? ($input ? 'label' : null);
    $_colorChecked = $colorChecked ?? ($input ? 'black' : null);
@endphp

<x-kit::button.base :attributes="$attributes->when(
    $target,
    fn($a) => $a->merge([
        'wire:loading.attr' => 'disabled',
        'wire:loading.class' => 'el-loading',
    ]),
)" :size="$size" :color-checked="$_colorChecked" :tag="$_tag">
    {!! $before !!}
    {!! $input !!}

    @if ($icon)
        @php
            $iconAttributes = is_object($icon) ? $icon->attributes : new \Illuminate\View\ComponentAttributeBag();
        @endphp

        <x-kit::button.icon :icon="$icon" :offset="$offset" :size="$size" :badge="$badge" :attributes="$iconAttributes" />
    @endif

    @if ($slot->hasActualContent() || $content)
        @php
            $contentAttributes = is_object($content)
                ? $content->attributes
                : new \Illuminate\View\ComponentAttributeBag();
        @endphp
        <span
            {{ $contentAttributes->class([
                'relative',
                'inline-flex min-w-0',
                'ml-2' => $icon && $offset,
                'mr-2' => $iconRight && $offset,
            ]) }}>
            {{ $content ?? $slot }}

            @if (!$icon && $badge)
                <x-kit::button.badge :count="$badge" />
            @endif
        </span>
    @endif

    @if ($iconRight)
        @php
            $iconAttributes = is_object($iconRight)
                ? $iconRight->attributes
                : new \Illuminate\View\ComponentAttributeBag();
        @endphp

        <x-kit::button.icon :icon="$iconRight" :offset="$offset" :size="$size" :attributes="$iconAttributes" />
    @endif

    <span class="el-loader">
        <span
            class="animate-spin-loader size-4 rounded-full border-2 border-current border-r-transparent border-t-transparent"></span>
        {{ $loader }}
    </span>

    {!! $after !!}
</x-kit::button.base>
