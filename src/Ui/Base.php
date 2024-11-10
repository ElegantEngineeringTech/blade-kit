<?php

namespace Elegantly\Kit\Ui;

use Stringable;

class Base implements Stringable
{
    public string $class;

    public ?string $color = null;

    public ?string $size = null;

    final public function __construct(
        ?string $class = null
    ) {
        $this->class = $class ?? '';
    }

    public static function make(
        ?string $class = null
    ): static {
        return new static($class);
    }

    /**
     * @return $this
     */
    public function append(string $value): static
    {

        if ($value) {
            $this->class .= " {$value}";
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function size(?string $value = null): static
    {
        $this->size = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function color(?string $value = null): static
    {
        $this->color = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function background(): static
    {
        return $this->append(match ($this->color) {
            'white' => 'bg-white text-black ring-gray-200 ring-1 ring-inset dark:bg-zinc-800 dark:text-white dark:ring-zinc-700',
            'black' => 'bg-black text-white ring-black dark:bg-white dark:text-black',
            'gray' => 'bg-gray-100 text-gray-600 ring-gray-100',
            'gray-light' => 'bg-gray-400/20 text-gray-800 ring-gray-400/20',
            'sky' => 'bg-sky-500 text-white ring-sky-500',
            'sky-light' => 'bg-sky-400/20 text-sky-800 ring-sky-400/20',
            'emerald' => 'bg-emerald-500 text-white ring-emerald-500',
            'emerald-light' => 'bg-emerald-400/20 text-emerald-800 ring-emerald-400/20',
            'rose' => 'bg-rose-500 text-white ring-rose-500',
            'rose-light' => 'bg-rose-400/20 text-rose-800 ring-rose-400/20',
            'purple' => 'bg-purple-500 text-white ring-purple-500',
            'purple-light' => 'bg-purple-400/20 text-purple-800 ring-purple-400/20',
            'yellow' => 'bg-yellow-500 text-white ring-yellow-400/20',
            'yellow-light' => 'bg-yellow-400/20 text-yellow-800 ring-yellow-400/20',
            'amber' => 'bg-amber-500 text-white ring-amber-400/20',
            'amber-light' => 'bg-amber-400/20 text-amber-800 ring-amber-400/20',
            'glass' => 'bg-white/50 text-black ring-white ring-1 ring-inset',
            'transparent' => 'bg-transparent text-inherit border-transparent',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function outline(): static
    {
        return $this->append(match ($this->color) {
            'white' => 'outline-black',
            'black' => 'outline-black',
            'gray' => 'outline-gray-200',
            'gray-light' => 'outline-gray-100',
            'sky' => 'outline-sky-500',
            'sky-light' => 'outline-sky-500',
            'emerald' => 'outline-emerald-500',
            'emerald-light' => 'outline-emerald-500',
            'rose' => 'outline-rose-500',
            'rose-light' => 'outline-rose-500',
            'purple' => 'outline-purple-500',
            'purple-light' => 'outline-purple-500',
            'yellow' => 'outline-yellow-500',
            'yellow-light' => 'outline-yellow-500',
            'amber' => 'outline-amber-500',
            'amber-light' => 'outline-amber-500',
            'glass' => 'outline-black',
            'transparent' => 'outline-black',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function font(): static
    {
        return $this->append(match ($this->size) {
            '2xs', 'xs' => 'text-xs',
            'sm' => 'text-sm',
            'base', 'md' => 'text-sm',
            'lg' => 'text-base',
            'xl' => 'text-lg',
            '2xl' => 'text-xl',
            '3xl' => 'text-2xl leading-normal',
            '4xl' => 'text-3xl leading-normal',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function spacing(): static
    {
        return $this->append(match ($this->size) {
            '2xs' => 'px-2 py-1 min-w-5',
            'xs' => 'px-2.5 py-1.5 min-w-7',
            'sm' => 'px-2.5 py-1.5 min-w-8',
            'base', 'md', 'lg', 'xl' => 'px-3 py-2 min-w-9',
            default => ''
        });
    }

    public function __toString(): string
    {
        return (string) $this->class;
    }
}
