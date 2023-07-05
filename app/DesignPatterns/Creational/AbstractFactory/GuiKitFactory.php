<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

use App\DesignPatterns\Creational\AbstractFactory\Factories\MaterialFactory;
use App\DesignPatterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class GuiKitFactory
{
    public function getFactory($type): GuiFactoryInterface
    {
        return match($type) {
            'bootstrap' => new BootstrapFactory(),
            'material' => new MaterialFactory(),
            default => throw new \Exception("Invalid factory type [{$type}]"),
        };
    }

}
