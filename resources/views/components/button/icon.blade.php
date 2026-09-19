@props(['icon', 'offset', 'badge' => null])

<span {{ $attributes->class(['el-button-icon', '-mx-1' => $offset]) }}>
    {{ $icon }}

    @if ($badge)
        <x-kit::badge class="absolute -right-1 -top-1" :count="$badge" />
    @endif
</span>
