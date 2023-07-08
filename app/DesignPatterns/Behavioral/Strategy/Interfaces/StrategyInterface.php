<?php

namespace App\DesignPatterns\Behavioral\Strategy\Interfaces;

interface StrategyInterface
{
    public function algorithm(array $data): array;
}
