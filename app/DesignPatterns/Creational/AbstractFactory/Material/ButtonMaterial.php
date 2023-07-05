<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Material;

use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;

class ButtonMaterial implements ButtonInterface
{
    public function draw()
    {
        Debugbar::info(__CLASS__);

        return __CLASS__;
    }

}