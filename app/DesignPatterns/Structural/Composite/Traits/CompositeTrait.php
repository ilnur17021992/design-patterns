<?php

namespace App\DesignPatterns\Structural\Composite\Traits;

use App\DesignPatterns\Structural\Composite\Interfaces\ComponentInterface;

trait CompositeTrait
{
    use ComponentTrait{
        ComponentTrait::display as displaySelf;
    }

    protected $children = array();

    public function add(ComponentInterface $item)
    {
        $this->children[$item->name] = $item;
    }

    public function remove(ComponentInterface $item)
    {
        unset($this->children[$item->name]);
    }

    public function display()
    {
        $this->displaySelf();
        foreach ($this->children as $child) {
            $child->display();
        }
    }
}
