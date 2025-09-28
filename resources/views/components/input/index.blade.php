@props([
    'icon' => null,
    'iconRight' => null,
    'start' => null,
    'end' => null,
    'size' => 'base',
    'color' => 'white',
])

<div {{ $attributes->class(['el-input el-text el-bg el-outline el-border el-ring']) }} data-size="{{ $size }}"
    data-color="{{ $color }}">

    {{ $start }}

    <div class="relative flex min-w-0 grow">

        @if ($icon)
            @php
                $iconAttributes = is_object($icon) ? $icon->attributes : new \Illuminate\View\ComponentAttributeBag();
            @endphp

            <x-kit::input.icon :attributes="$iconAttributes">
                {{ $icon }}
            </x-kit::input.icon>
        @endif

        @if ($slot)
            {{ $slot }}
        @else
            <input type="text" />
        @endif

        @if ($iconRight)
            @php
                $iconAttributes = is_object($icon)
                    ? $iconRight->attributes
                    : new \Illuminate\View\ComponentAttributeBag();
            @endphp

            <x-kit::input.icon :attributes="$iconAttributes">
                {{ $iconRight }}
            </x-kit::input.icon>
        @endif

    </div>

    {{ $end }}

</div>
