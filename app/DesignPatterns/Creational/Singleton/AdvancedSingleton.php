<?php

namespace App\DesignPatterns\Creational\Singleton;

class AdvancedSingleton
{
    use SingletonTrait;

    private $test;

    public function setTest($value)
    {
        $this->test = $value;
    }
}
