<?php

namespace Elegantly\Kit\Ui;

use Stringable;

abstract class Ui implements Stringable
{
    public string $class;

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

    public function value(): string
    {
        return (string) $this->class;
    }

    public function __toString(): string
    {
        return $this->value();
    }
}
