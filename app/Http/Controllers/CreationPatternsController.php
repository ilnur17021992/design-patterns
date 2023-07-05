<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;
use App\DesignPatterns\Creational\FactoryMethod\Forms\MaterialDialogForm;
use App\DesignPatterns\Creational\FactoryMethod\Forms\BootstrapDialogForm;
use App\DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use App\DesignPatterns\Creational\StaticFactory\StaticFactory;

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

    public function factoryMethod()
    {
        $dialogForm = new MaterialDialogForm();
        $result = $dialogForm->render();

        dump($result);

        $dialogForm = new BootstrapDialogForm();
        $result = $dialogForm->render();

        dump($result);
    }

    public function staticFactory()
    {
        $mailMessenger = StaticFactory::build('email');
        $smsMessenger = StaticFactory::build('sms');
        
        dump($mailMessenger);
        dump($smsMessenger);
    }

    public function simpleFactory()
    {
        $factory = new SimpleFactory();
        $mailMessenger = $factory->build('email');
        $smsMessenger = $factory->build('sms');
        
        dump($mailMessenger);
        dump($smsMessenger);
    }
}
