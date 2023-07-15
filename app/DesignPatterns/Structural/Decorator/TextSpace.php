<?php

namespace App\DesignPatterns\Structural\Decorator;

use App\DesignPatterns\Structural\Decorator\Interfaces\TextInterface;

class TextSpace implements TextInterface
{
    protected $object;

    public function __construct(TextInterface $text) {
        $this->object = $text;
    }

    public function show() {
        echo ' ';
        $this->object->show();
    }
}
