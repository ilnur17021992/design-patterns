<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Bootstrap;

use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckBoxBootstrap implements CheckBoxInterface
{
    public function draw()
    {
        Debugbar::info(__CLASS__);

        return __CLASS__;
    }

}