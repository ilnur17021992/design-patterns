<?php

namespace App\DesignPatterns\Structural\Bridge;

use App\DesignPatterns\Structural\Bridge\Interfaces\PrinterInterface;

class ExcelPrinter implements PrinterInterface
{
    public function printHeader($textHeader)
    {
        echo 'This is your header (' . $textHeader . ') in the xls file<br>';
    }

    public function printBody($textBody)
    {
        echo 'This is your text body (' . $textBody . ') in the xls file<br>';
    }
}
