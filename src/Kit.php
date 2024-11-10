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
        return Base::make();
    }

    public function button(): Button
    {
        return Button::make();
    }

    public function input(): Input
    {
        return Input::make();
    }

    public function select(): Select
    {
        return Select::make();
    }

    public function tag(): Tag
    {
        return Tag::make();
    }

    public function switch(): SwitchUi
    {
        return SwitchUi::make();
    }
}
