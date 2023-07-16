<?php

namespace App\DesignPatterns\Structural\Bridge\Abstractions;

use App\DesignPatterns\Structural\Bridge\Interfaces\PrinterInterface;

abstract class ReportAbstraction
{
    protected $printer;

    public function __construct(PrinterInterface $printer) {
        $this->printer = $printer;
    }

    public function printHeader($textHeader) {
        $this->printer->printHeader($textHeader);
    }

    public function printBody($textBody) {
        $this->printer->printBody($textBody);
    }
}
