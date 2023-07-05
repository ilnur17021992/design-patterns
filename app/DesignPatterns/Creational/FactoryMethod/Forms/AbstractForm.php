<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Forms;

use App\DesignPatterns\Creational\FactoryMethod\Interfaces\FormInterface;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

abstract class AbstractForm implements FormInterface
{
    public function render()
    {
        $guiKit = $this->createGuiKit();
        $result[] = $guiKit->buildButton()->draw();
        $result[] = $guiKit->buildCheckBox()->draw();

        return $result;
    }

    abstract function createGuiKit(): GuiFactoryInterface;
}
