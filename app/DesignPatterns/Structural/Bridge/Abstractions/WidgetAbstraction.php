<?php

namespace App\DesignPatterns\Structural\Bridge\Abstractions;

use App\DesignPatterns\Structural\Bridge\Interfaces\WidgetRealizationInterface;
use Barryvdh\Debugbar\Facades\Debugbar;

class WidgetAbstraction
{
    protected $realization;

    public function setRealization(WidgetRealizationInterface $realization)
    {
        $this->realization = $realization;
    }

    public function getRealization()
    {
        return $this->realization;    
    }

    protected function viewLogic($viewData)
    {
        $method = class_basename(static::class) .  '::' . __FUNCTION__;

        Debugbar::info($method, $viewData);
    }

}
