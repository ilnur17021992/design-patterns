<?php

namespace App\DesignPatterns\Behavioral\Strategy;

use App\DesignPatterns\Behavioral\Strategy\Interfaces\StrategyInterface;

class StrategyA implements StrategyInterface
{
    public function algorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}
