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
            'white' => 'text-black placeholder:text-gray-400',
            default => ''
        });
    }
}
