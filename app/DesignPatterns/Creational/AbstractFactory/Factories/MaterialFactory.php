<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Factories;

use App\DesignPatterns\Creational\AbstractFactory\Material\ButtonMaterial;
use App\DesignPatterns\Creational\AbstractFactory\Material\CheckBoxMaterial;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\CheckBoxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class MaterialFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonMaterial();
    }

    public function buildCheckbox(): CheckBoxInterface
    {
        return new CheckBoxMaterial();
    }
}
