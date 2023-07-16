<?php

namespace App\DesignPatterns\Structural\Bridge\Interfaces;

interface PrinterInterface
{
    public function printHeader($textHeader);
    public function printBody($textBody);
}
