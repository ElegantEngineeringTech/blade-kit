<?php

namespace Elegantly\Kit\Ui;

class Base extends Ui
{
    public ?string $color = null;

    public ?string $size = null;

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
            'white' => 'bg-white text-black ring-gray-200 dark:bg-zinc-800 dark:text-white dark:ring-zinc-700',
            'black' => 'bg-black text-white ring-black dark:bg-white dark:text-black placeholder:text-white/60',
            'gray' => 'bg-gray-100 text-gray-600 ring-gray-100',
            'gray-light' => 'bg-gray-400/20 text-gray-800 ring-gray-400/20',
            'sky' => 'bg-sky-500 text-white ring-sky-500 placeholder:text-white/60',
            'sky-light' => 'bg-sky-400/20 text-sky-800 ring-sky-400/20 placeholder:text-sky-800/40',
            'emerald' => 'bg-emerald-500 text-white ring-emerald-500 placeholder:text-white/60',
            'emerald-light' => 'bg-emerald-400/20 text-emerald-800 ring-emerald-400/20 placeholder:text-emerald-800/40',
            'rose' => 'bg-rose-500 text-white ring-rose-500 placeholder:text-white/60',
            'rose-light' => 'bg-rose-400/20 text-rose-800 ring-rose-400/20 placeholder:text-rose-800/40',
            'purple' => 'bg-purple-500 text-white ring-purple-500 placeholder:text-white/60',
            'purple-light' => 'bg-purple-400/20 text-purple-800 ring-purple-400/20 placeholder:text-purple-800/40',
            'yellow' => 'bg-yellow-500 text-white ring-yellow-400/20 placeholder:text-white/60',
            'yellow-light' => 'bg-yellow-400/20 text-yellow-800 ring-yellow-400/20 placeholder:text-yellow-800/40',
            'amber' => 'bg-amber-500 text-white ring-amber-400/20 placeholder:text-white/60',
            'amber-light' => 'bg-amber-400/20 text-amber-800 ring-amber-400/20 placeholder:text-amber-800/40',
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
            'transparent' => 'outline-transparent',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function border(): static
    {
        return $this->append(match ($this->color) {
            'white' => '',
            'black' => 'border-black',
            'gray' => 'border-gray-200',
            'gray-light' => 'border-gray-100',
            'sky' => 'border-sky-600',
            'sky-light' => 'border-sky-500',
            'emerald' => 'border-emerald-600',
            'emerald-light' => 'border-emerald-500',
            'rose' => 'border-rose-600',
            'rose-light' => 'border-rose-500',
            'purple' => 'border-purple-600',
            'purple-light' => 'border-purple-500',
            'yellow' => 'border-yellow-600',
            'yellow-light' => 'border-yellow-500',
            'amber' => 'border-amber-600',
            'amber-light' => 'border-amber-500',
            'glass' => 'border-white',
            'transparent' => 'border-transparent',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function ring(): static
    {
        return $this->append(match ($this->color) {
            'white' => '',
            'black' => 'ring-black',
            'gray' => 'ring-gray-200',
            'gray-light' => 'ring-gray-100',
            'sky' => 'ring-sky-600',
            'sky-light' => 'ring-sky-500',
            'emerald' => 'ring-emerald-600',
            'emerald-light' => 'ring-emerald-500',
            'rose' => 'ring-rose-600',
            'rose-light' => 'ring-rose-500',
            'purple' => 'ring-purple-600',
            'purple-light' => 'ring-purple-500',
            'yellow' => 'ring-yellow-600',
            'yellow-light' => 'ring-yellow-500',
            'amber' => 'ring-amber-600',
            'amber-light' => 'ring-amber-500',
            'glass' => 'ring-white',
            'transparent' => 'ring-transparent',
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
            '2xs' => 'px-2 py-1 min-w-6',
            'xs' => 'px-2.5 py-1.5 min-w-7',
            'sm' => 'px-2.5 py-1.5 min-w-8',
            'base', 'md', 'lg', 'xl' => 'px-3 py-2 min-w-9',
            default => ''
        });
    }
}
