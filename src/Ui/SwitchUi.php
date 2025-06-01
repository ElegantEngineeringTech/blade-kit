<?php

namespace Elegantly\Kit\Ui;

class SwitchUi extends Base
{
    /**
     * @return $this
     */
    public function background(): static
    {
        return $this->append(match ($this->color) {
            'white' => 'before:bg-gray-300 checked:before:bg-white dark:before:bg-gray-600 dark:checked:before:bg-black',
            'black' => 'before:bg-gray-300 checked:before:bg-black dark:before:bg-gray-600 dark:checked:before:bg-white',
            'gray' => 'before:bg-gray-300 checked:before:bg-gray-500 dark:before:bg-gray-600 dark:checked:before:bg-white',
            'emerald' => 'before:bg-gray-300 checked:before:bg-emerald-500 dark:before:bg-gray-600 dark:checked:before:bg-emerald-700',
            'sky' => 'before:bg-gray-300 checked:before:bg-sky-500 dark:before:bg-gray-600 dark:checked:before:bg-sky-700',
            'rose' => 'before:bg-gray-300 checked:before:bg-rose-500 dark:before:bg-gray-600 dark:checked:before:bg-rose-700',
            'purple' => 'before:bg-gray-300 checked:before:bg-purple-500 dark:before:bg-gray-600 dark:checked:before:bg-purple-700',
            'yellow' => 'before:bg-gray-300 checked:before:bg-yellow-500 dark:before:bg-gray-600 dark:checked:before:bg-yellow-700',
            'amber' => 'before:bg-gray-300 checked:before:bg-amber-500 dark:before:bg-gray-600 dark:checked:before:bg-amber-700',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function outline(): static
    {
        return $this->append(match ($this->color) {
            'white' => 'before:outline-black',
            'black' => 'before:outline-black',
            'gray' => 'before:outline-gray-200',
            'sky' => 'before:outline-sky-500',
            'emerald' => 'before:outline-emerald-500',
            'rose' => 'before:outline-rose-500',
            'purple' => 'before:outline-purple-500',
            'yellow' => 'before:outline-yellow-500',
            'amber' => 'before:outline-amber-500',
            default => ''
        });
    }
}
