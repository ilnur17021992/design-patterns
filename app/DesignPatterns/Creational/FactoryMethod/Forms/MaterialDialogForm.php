<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Forms;

use App\DesignPatterns\Creational\AbstractFactory\Factories\MaterialFactory;
use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class MaterialDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new MaterialFactory();
    }
}
