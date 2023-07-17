<?php

namespace App\DesignPatterns\Structural\Composite;

use App\DesignPatterns\Structural\Composite\Interfaces\ComponentInterface;
use App\DesignPatterns\Structural\Composite\Traits\CompositeTrait;

class Composite implements ComponentInterface
{
    use CompositeTrait;
}
