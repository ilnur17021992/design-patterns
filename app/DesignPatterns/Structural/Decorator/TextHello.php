<?php

namespace App\DesignPatterns\Structural\Decorator;

use App\DesignPatterns\Structural\Decorator\Interfaces\TextInterface;

class TextHello implements TextInterface
{
    protected $object;

    public function __construct(TextInterface $text) {
        $this->object = $text;
    }

    public function show() {
        echo 'Hello';
        $this->object->show();
    }
}
