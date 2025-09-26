@props([
    'count' => 0,
    'max' => 99,
    'color' => 'rose',
])

<span {!! $attributes->class([
    'size-5' => $count > 1,
    'size-3' => $count <= 1,
    'el-badge el-text el-bg el-outline',
]) !!}>
    {{ $count > 1 ? min($count, $max) : null }}
</span>
