<?php

namespace App\DesignPatterns\Structural\Facade\Components;

use Barryvdh\Debugbar\Facades\Debugbar;

class CPU
{
    public function freeze()
    {
        Debugbar::info(__METHOD__);
    }

    public function jump($position)
    {
        Debugbar::info(__METHOD__ . ':' . $position);
    }

    public function execute()
    {
        Debugbar::info(__METHOD__);
    }
}
