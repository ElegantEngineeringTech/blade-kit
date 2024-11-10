<?php

namespace Elegantly\Kit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elegantly\Kit\Kit
 */
class Kit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Elegantly\Kit\Kit::class;
    }
}
