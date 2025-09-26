@props(['icon', 'size', 'unoffset'])

<span {{ $attributes->class(['el-tag-icon', '-mx-1' => !$unoffset]) }}>
    {{ $icon }}
</span>
