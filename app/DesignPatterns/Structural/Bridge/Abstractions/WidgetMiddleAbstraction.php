<?php

namespace App\DesignPatterns\Structural\Bridge\Abstractions;

use App\DesignPatterns\Structural\Bridge\Interfaces\WidgetRealizationInterface;

class WidgetMiddleAbstraction extends WidgetAbstraction
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
        $title = $this->getMiddleTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'title', 'description');
    }

    private function getMiddleTitle()
    {
        return $this->getRealization()->getId()
            . '->'
            . $this->getRealization()->getTitle();
    }
}
