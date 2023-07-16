<?php

namespace App\DesignPatterns\Structural\Bridge\Interfaces;

interface WidgetRealizationInterface
{
    public function getId();
    public function getTitle();
    public function getDescription();
}
