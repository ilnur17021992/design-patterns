<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignPatterns\Creational\Singleton\SimpleSingleton;
use App\DesignPatterns\Creational\Singleton\LaravelSingleton;
use App\DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use App\DesignPatterns\Creational\Singleton\AdvancedSingleton;
use App\DesignPatterns\Creational\StaticFactory\StaticFactory;
use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;
use App\DesignPatterns\Creational\FactoryMethod\Forms\MaterialDialogForm;
use App\DesignPatterns\Creational\FactoryMethod\Forms\BootstrapDialogForm;
use App\DesignPatterns\Creational\Singleton\Interfaces\LaravelSingletonInterface;
use Barryvdh\Debugbar\Facades\Debugbar;

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

    public function singleton()
    {
        $result['simpleSingleton1'] = SimpleSingleton::getInstance();
        $result['simpleSingleton1']->setTest('simpleSingleton1');
        $result['simpleSingleton2'] = SimpleSingleton::getInstance();
        $result[] = $result['simpleSingleton1'] === $result['simpleSingleton2'];

        $result['advancedSingleton1'] = AdvancedSingleton::getInstance();
        $result['advancedSingleton1']->setTest('advancedSingleton1');
        $result['advancedSingleton2'] = AdvancedSingleton::getInstance();
        $result[] = $result['advancedSingleton1'] === $result['advancedSingleton2'];
        
        $result['laravelSingleton1'] = app(LaravelSingletonInterface::class);
        $result['laravelSingleton1']->setTest('laravelSingleton1');
        $result['laravelSingleton2'] = app(LaravelSingletonInterface::class);
        $result['laravelSingleton3'] = new LaravelSingleton();
        $result[] = $result['laravelSingleton1'] === $result['laravelSingleton2'];
        $result[] = $result['laravelSingleton1'] === $result['laravelSingleton3'];

        // $test = AdvancedSingleton::getInstance();
        // $serialized = serialize($test);
        // $unserialized = unserialize($serialized);
        // dump($unserialized);
        
        dump($result);
        Debugbar::info($result);
    }
}
