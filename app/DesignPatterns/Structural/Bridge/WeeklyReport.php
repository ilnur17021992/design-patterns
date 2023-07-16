<?php

namespace App\DesignPatterns\Structural\Bridge;

use App\DesignPatterns\Structural\Bridge\Abstractions\ReportAbstraction;

class WeeklyReport extends ReportAbstraction
{
    public function print(array $text) {
        $this->printHeader($text['header']);
        $this->printBody($text['body']);
    }
}
