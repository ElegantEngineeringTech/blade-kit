@props([
    'rows' => 1,
    'size' => 'base',
    'color' => null,
    'autocomplete' => 'off',
    'spellcheck' => 'true',
    'autosized' => false,
])

<textarea {{ $attributes->class(['el-textarea el-text el-spacing el-bg el-outline']) }} data-size="{{ $size }}"
    data-color="{{ $color }}" @if ($autosized) autosized @endif rows="{{ $rows }}"
    autocomplete="{{ $autocomplete }}" spellcheck="{{ $spellcheck }}"
    {{ when($autocomplete === 'off', 'data-1p-ignore data-bwignore data-lpignore="true" data-form-type="other"') }}
    x-data="{
        native: false,
        minHeight: null,
        init() {
            this.native = CSS.supports('field-sizing: content');
    
            this.minHeight = this.$el.getBoundingClientRect().height;
    
            if (!this.native) {
                this.$nextTick(() => {
                    this.resize();
                });
            }
    
        },
        resize() {
            this.$el.style.height = `${this.minHeight}px`;
            this.$el.style.height = `${this.$el.scrollHeight}px`;
        },
        onInput(event) {
            if (!this.native) {
                this.resize();
            }
        },
    }" x-on:input="onInput" x-intersect="onInput">{{ $slot }}</textarea>
