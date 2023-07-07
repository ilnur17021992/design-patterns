<?php

namespace App\DesignPatterns\Creational\Singleton;

use App\DesignPatterns\Creational\Singleton\Interfaces\LaravelSingletonInterface;

class LaravelSingleton implements LaravelSingletonInterface
{
    private $test;

    public function setTest($value)
    {
        $this->test = $value;
    }
}
