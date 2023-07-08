<?php

namespace App\DesignPatterns\Behavioral\Strategy;

use App\DesignPatterns\Behavioral\Strategy\Interfaces\StrategyInterface;

class StrategyB implements StrategyInterface
{
    public function algorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
