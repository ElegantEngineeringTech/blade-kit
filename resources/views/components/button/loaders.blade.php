@props(['items', 'delay' => 10_000])

<span x-data="{
    i: 0,
    interval: null,
    clearInterval() { this.interval && clearInterval(this.interval); },
    initInterval() {
        this.clearInterval();
        const total = this.$el.children.length;
        this.interval = setInterval(() => { this.i = (this.i + 1) % total; }, {{ $delay }});
    },
    init() { this.initInterval(); },
    destroy() { this.clearInterval(); }
}" {{ $attributes->class(['inline-block min-w-0 max-w-full']) }}>
    @foreach ($items as $index => $item)
        <span class="block min-w-0 max-w-full truncate" x-show="i === {{ $index }}"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0">
            {{ $item }}
        </span>
    @endforeach
</span>
