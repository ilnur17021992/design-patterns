<?php

namespace App\DesignPatterns\Structural\Bridge;

use App\DesignPatterns\Structural\Bridge\Entities\Category;
use App\DesignPatterns\Structural\Bridge\Interfaces\WidgetRealizationInterface;

class CategoryWidgetRealization implements WidgetRealizationInterface
{
    private $entity;

    public function __construct(Category $product)
    {
        $this->entity = $product;
    }

    public function getId()
    {
        return $this->entity->id;
    }

    public function getTitle()
    {
        return $this->entity->title;
    }

    public function getDescription()
    {
        return $this->entity->description;
    }
}
