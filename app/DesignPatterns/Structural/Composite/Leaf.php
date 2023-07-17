<?php

namespace App\DesignPatterns\Structural\Composite;

use App\DesignPatterns\Structural\Composite\Traits\ComponentTrait;
use App\DesignPatterns\Structural\Composite\Interfaces\ComponentInterface;

class Leaf implements ComponentInterface
{
    use ComponentTrait;
}
