<?php

namespace App\DesignPatterns\Structural\Decorator;

use App\DesignPatterns\Structural\Decorator\Interfaces\TextInterface;

class TextEmpty implements TextInterface
{
    public function show() {
        echo '!';
    }
}
