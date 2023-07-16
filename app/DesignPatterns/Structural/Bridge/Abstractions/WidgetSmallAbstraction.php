<?php

namespace App\DesignPatterns\Structural\Bridge\Abstractions;

use Illuminate\Support\Str;
use App\DesignPatterns\Structural\Bridge\Interfaces\WidgetRealizationInterface;

class WidgetSmallAbstraction extends WidgetAbstraction
{
    public function run(WidgetRealizationInterface $realization)
    {
        $this->setRealization($realization);

        $viewData = $this->getViewData();
        $this->viewLogic($viewData);
    }

    public function getViewData()
    {
        $id = $this->getRealization()->getId();
        $title = $this->getSmallTitle();

        return compact('id', 'title');
    }

    private function getSmallTitle()
    {
        return Str::limit($this->getRealization()->getTitle(), 5);
    }
}
