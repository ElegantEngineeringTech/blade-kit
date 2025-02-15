<?php

namespace Elegantly\Kit\Ui;

class Tag extends Base
{
    public function icon(): static
    {
        $this->append(match ($this->size) {
            '2xs' => 'size-4 p-px',
            'xs' => 'size-4',
            'sm' => 'size-5 p-0.5 text-base',
            'base', 'md' => 'size-5 p-0.5 text-base',
            'lg' => 'size-6 p-0.5',
            'xl' => 'size-6 p-0.5',
            default => ''
        });

        return $this;
    }

    public function button(): static
    {
        $this->append(match ($this->size) {
            '2xs' => '-my-1 -mr-2',
            'xs', 'sm' => '-my-1.5 -mr-2.5',
            'base', 'md', 'lg', 'xl' => '-my-2 -mr-3',
            default => ''
        });

        return $this;
    }
}
