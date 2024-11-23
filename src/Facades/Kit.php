<?php

namespace Elegantly\Kit\Facades;

use Elegantly\Kit\Ui\Base;
use Elegantly\Kit\Ui\Button;
use Elegantly\Kit\Ui\Input;
use Elegantly\Kit\Ui\Select;
use Elegantly\Kit\Ui\Tag;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Base base()
 * @method static Button button()
 * @method static Input input()
 * @method static Select select()
 * @method static Tag tag()
 *
 * @see \Elegantly\Kit\Kit
 */
class Kit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Elegantly\Kit\Kit::class;
    }
}
