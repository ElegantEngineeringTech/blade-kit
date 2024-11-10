<?php

namespace Elegantly\Kit\Ui;

class Select extends Input
{
    /**
     * select elements do not support line-height
     *
     * @return $this
     */
    public function font(): static
    {
        return parent::font()->append(match ($this->size) {
            'sm' => 'min-h-8',
            'base', 'md' => 'min-h-9',
            'lg' => 'min-h-10',
            'xl' => 'min-h-11',
            default => ''
        });
    }

    /**
     * @return $this
     */
    public function spacing(): static
    {
        return $this->append(match ($this->size) {
            '2xs' => 'pl-2 pr-6 py-1 min-w-5 bg-[length:1rem] bg-[right_0.25rem_center]',
            'xs' => 'pl-2.5 pr-8 py-1.5 min-w-7 bg-[length:1rem] bg-[right_0.5rem_center]',
            'sm' => 'pl-2.5 pr-10 py-1.5 min-w-8 bg-[length:1.5rem] bg-[right_0.5rem_center]',
            'base', 'md', 'lg', 'xl' => 'pl-3 pr-10 py-2 min-w-9 bg-[length:1.5rem] bg-[right_0.5rem_center]',
            default => ''
        });
    }
}
