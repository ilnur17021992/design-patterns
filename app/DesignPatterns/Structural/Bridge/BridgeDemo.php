<?php

namespace App\DesignPatterns\Structural\Bridge;

use App\DesignPatterns\Structural\Bridge\Entities\Product;
use App\DesignPatterns\Structural\Bridge\Entities\Category;
use App\DesignPatterns\Structural\Bridge\ProductWidgetRealization;
use App\DesignPatterns\Structural\Bridge\CategoryWidgetRealization;
use App\DesignPatterns\Structural\Bridge\Abstractions\WidgetBigAbstraction;
use App\DesignPatterns\Structural\Bridge\Abstractions\WidgetSmallAbstraction;
use App\DesignPatterns\Structural\Bridge\Abstractions\WidgetMiddleAbstraction;

class BridgeDemo
{
    public function run()
    {
        $productRealization = new ProductWidgetRealization(new Product());
        $categoryRealization = new CategoryWidgetRealization(new Category());

        $views = [
            new WidgetBigAbstraction(),
            new WidgetMiddleAbstraction(),
            new WidgetSmallAbstraction(),
        ];

        foreach ($views as $view) {
            $view->run($productRealization);
            $view->run($categoryRealization);
        }
    }
}
