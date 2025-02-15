<?php

namespace Elegantly\Kit\Ui;

class Button extends Base
{
    /**
     * @return $this
     */
    public function hover(): static
    {
        return $this->append(match ($this->color) {
            'black' => 'hover:bg-gray-700 hover:text-white dark:hover:bg-zinc-300 dark:hover:text-black',
            'white' => 'hover:bg-gray-100 hover:text-black dark:hover:bg-zinc-900 dark:hover:text-white',
            'gray' => 'hover:bg-gray-200 hover:text-gray-900',
            'gray-light' => '',
            'sky' => 'hover:bg-sky-600 hover:text-white',
            'sky-light' => 'hover:bg-sky-400/40 hover:text-sky-800',
            'emerald' => 'hover:bg-emerald-600 hover:text-white',
            'emerald-light' => 'hover:bg-emerald-400/40 hover:text-emerald-800',
            'rose' => 'hover:bg-rose-600 hover:text-white',
            'rose-light' => 'hover:bg-rose-400/40 hover:text-rose-800',
            'purple' => 'hover:bg-purple-600 hover:text-white',
            'purple-light' => 'hover:bg-purple-400/40 hover:text-purple-800',
            'amber' => 'hover:bg-amber-600 hover:text-white',
            'amber-light' => 'hover:bg-amber-400/40 hover:text-amber-800',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function icon(): static
    {
        return $this->append(match ($this->size) {
            '2xs' => 'size-4 p-px',
            'xs' => 'size-4 text-base',
            'sm' => 'size-5 p-0.5 text-base',
            'base', 'md' => 'size-5 p-0.5 text-base',
            'lg' => 'size-6 p-0.5',
            'xl' => 'size-7 p-0.5',
            default => ''
        });
    }

    public function checked(): string
    {
        return $this->append(match ($this->color) {
            'white' => 'has-[:checked]:bg-white has-[:checked]:text-black',
            'black' => 'has-[:checked]:bg-black has-[:checked]:text-white',
            'emerald' => 'has-[:checked]:bg-emerald-500 has-[:checked]:text-white',
            'rose' => 'has-[:checked]:bg-rose-500 has-[:checked]:text-white',
            'amber' => 'has-[:checked]:bg-amber-500 has-[:checked]:text-white',
            default => ''
        });
    }
}
