<?php

namespace App\DesignPatterns\Structural\Composite\Traits;

trait ComponentTrait
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function display()
    {
        print $this->name.'<br>'.PHP_EOL;
    }
}
