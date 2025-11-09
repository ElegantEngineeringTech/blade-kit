<div {{ $attributes->class('el-range-ticks') }}>

    @if ($slot->isEmpty())
        <template x-for="i in ticks" x-bind:key="i">
            <div x-bind:value="i"></div>
        </template>
    @else
        {{ $slot }}
    @endif
</div>
