<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Structural\Decorator\TextEmpty;
use App\DesignPatterns\Structural\Decorator\TextHello;
use App\DesignPatterns\Structural\Decorator\TextSpace;
use App\DesignPatterns\Structural\Decorator\TextWorld;

class StructuralPatternsController extends Controller
{
    public function decorator()
    {
        $decorator = new TextHello(new TextSpace(new TextWorld(new TextEmpty())));
        $decorator->show(); // Hello world
        echo '<br />' . PHP_EOL;
        $decorator = new TextWorld(new TextSpace(new TextHello(new TextEmpty())));
        $decorator->show(); // world Hello
    }

}
