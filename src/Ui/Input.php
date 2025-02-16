<?php

namespace Elegantly\Kit\Ui;

class Input extends Base
{
    /**
     * @return $this
     */
    public function text(): static
    {
        return $this->append(match ($this->color) {
            'white' => 'text-black placeholder:text-black/40',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function icon(): static
    {
        $this->append(match ($this->size) {
            '2xs' => 'size-4 p-px my-2 mx-2',
            'xs' => 'size-4 my-1.5 mx-1.5 text-base',
            'sm' => 'size-5 p-0.5 my-1.5 mx-1.5',
            'base', 'md' => 'size-5 p-0.5 my-2 mx-2 text-base',
            'lg' => 'size-6 p-0.5 my-2 mx-2 text-lg',
            'xl' => 'size-7 p-0.5 my-2 mx-2',
            default => ''
        });

        $this->append(match ($this->color) {
            'white' => 'text-black/40',
            'black' => 'text-white/60',
            'gray' => 'text-gray-600/60',
            'gray-light' => 'bg-gray-400/20 text-gray-800 ring-gray-400/20',
            'sky' => 'text-white/60',
            'sky-light' => 'text-sky-800/40',
            'emerald' => 'text-white/60',
            'emerald-light' => 'text-emerald-800/40',
            'rose' => 'text-white/60',
            'rose-light' => 'text-rose-800/40',
            'purple' => 'text-white/60',
            'purple-light' => 'text-purple-800/40',
            'yellow' => 'text-white/60',
            'yellow-light' => 'text-yellow-800/40',
            'amber' => 'text-white/60',
            'amber-light' => 'text-amber-800/40',
            'glass' => 'text-white/60',
            'transparent' => 'text-inherit',
            default => ''
        });

        return $this;
    }

    /**
     * @return $this
     */
    public function spacingIconLeft(): static
    {
        return $this->append(match ($this->size) {
            '2xs' => '',
            'xs' => 'pl-7',
            'sm' => 'pl-8',
            'base', 'md' => 'pl-8',
            'lg', 'xl' => 'pl-10',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function spacingIconRight(): static
    {
        return $this->append(match ($this->size) {
            '2xs' => '',
            'xs' => '',
            'sm' => '',
            'base', 'md', 'lg', 'xl' => 'pr-8',
            default => ''
        });
    }
}
