@props([
    'rows' => 1,
    'size' => 'base',
    'color' => null,
    'autocomplete' => 'off',
    'spellcheck' => 'true',
    'autosized' => false,
])

<textarea {{ $attributes->class(['el-textarea el-spacing el-bg el-outline']) }} data-size="{{ $size }}"
    data-color="{{ $color }}" @if ($autosized) autosized @endif rows="{{ $rows }}"
    autocomplete="{{ $autocomplete }}" spellcheck="{{ $spellcheck }}"
    {{ when($autocomplete === 'off', 'data-1p-ignore data-bwignore data-lpignore="true" data-form-type="other"') }}
    x-data="{
        native: false,
        minHeight: null,
        height: null,
        init() {
            this.native = CSS.supports('field-sizing: content');
    
            if (!this.native) {
                this.$nextTick(() => {
                    this.minHeight = this.$el.getBoundingClientRect().height;
                    this.height = this.$el.scrollHeight;
                });
            }
    
        },
        onInput(event) {
            if (!this.native) {
                this.height = this.minHeight;
                this.$nextTick(() => {
                    this.height = this.$el.scrollHeight;
                });
            }
        },
    }" x-on:input="onInput" x-on:focus="onInput"
    x-bind:style="{
        'height': height ? `${height}px` : '',
    }">{{ $slot }}</textarea>
