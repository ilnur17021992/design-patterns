<?php

namespace App\DesignPatterns\Structural\Facade\Components;

use Barryvdh\Debugbar\Facades\Debugbar;

class Memory
{
    const BOOT_ADDRESS = 0x0005;

    public function load($position, $data)
    {
        Debugbar::info(__METHOD__ . ':' . $position . ':' . $data);
    }
}
