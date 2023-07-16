<?php

namespace App\DesignPatterns\Structural\Facade\Components;

use Barryvdh\Debugbar\Facades\Debugbar;

class HardDrive
{
    const BOOT_SECTOR = 0x001;
    const SECTOR_SIZE = 64;

    public function read($lba, $size) {
        Debugbar::info(__METHOD__ . ':' . $lba . ':' . $size);
    }

}
