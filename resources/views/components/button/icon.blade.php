@props(['icon', 'offset', 'badge' => null])

<span {{ $attributes->class(['el-button-icon', '-mx-1' => $offset]) }}>
    {{ $icon }}

    @if ($badge)
        <x-kit::button.badge :count="$badge" />
    @endif
</span>
