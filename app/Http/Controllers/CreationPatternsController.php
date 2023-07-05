<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;


class CreationPatternsController extends Controller
{
    public function abstractFactory()
    {
        $guiKit = (new GuiKitFactory())->getFactory('material');
        $result[] = $guiKit->buildButton()->draw();
        $result[] = $guiKit->buildCheckBox()->draw();

        $guiKit = (new GuiKitFactory())->getFactory('bootstrap');
        $result[] = $guiKit->buildButton()->draw();
        $result[] = $guiKit->buildCheckBox()->draw();

        dump($result);
    }
}
