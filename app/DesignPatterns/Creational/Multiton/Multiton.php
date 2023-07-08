<?php

namespace App\DesignPatterns\Creational\Multiton;

use App\DesignPatterns\Creational\Multiton\Interfaces\MultitonInterface;

class Multiton implements MultitonInterface
{
    use MultitonTrait;
}
