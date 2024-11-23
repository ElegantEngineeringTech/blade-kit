<?php

namespace Elegantly\Kit;

use Elegantly\Kit\Ui\Base;
use Elegantly\Kit\Ui\Button;
use Elegantly\Kit\Ui\Input;
use Elegantly\Kit\Ui\Select;
use Elegantly\Kit\Ui\SwitchUi;
use Elegantly\Kit\Ui\Tag;

class Kit
{
    public function base(): Base
    {
        /** @var class-string<Base> */
        $class = config()->string('blade-kit.ui.base');

        return $class::make();
    }

    public function button(): Button
    {
        /** @var class-string<Button> */
        $class = config()->string('blade-kit.ui.button');

        return $class::make();
    }

    public function input(): Input
    {
        /** @var class-string<Input> */
        $class = config()->string('blade-kit.ui.input');

        return $class::make();
    }

    public function select(): Select
    {
        /** @var class-string<Select> */
        $class = config()->string('blade-kit.ui.select');

        return $class::make();
    }

    public function tag(): Tag
    {
        /** @var class-string<Tag> */
        $class = config()->string('blade-kit.ui.tag');

        return $class::make();
    }

    public function switch(): SwitchUi
    {
        /** @var class-string<SwitchUi> */
        $class = config()->string('blade-kit.ui.switch');

        return $class::make();
    }
}
