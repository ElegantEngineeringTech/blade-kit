<datalist {{ $attributes->class('el-range-ticks') }}>

    @if ($slot->isEmpty())
        <template x-for="i in ticks" x-bind:key="i">
            <option x-bind:value="i"></option>
        </template>
    @else
        {{ $slot }}
    @endif
</datalist>
