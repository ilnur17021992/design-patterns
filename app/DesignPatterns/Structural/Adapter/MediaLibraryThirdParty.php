<?php

namespace App\DesignPatterns\Structural\Adapter;

use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPatterns\Structural\Adapter\Interfaces\MediaLibraryThirdPartyInterface;

class MediaLibraryThirdParty implements MediaLibraryThirdPartyInterface
{
    public function addMedia($pathToFile): string
    {
        Debugbar::info(__METHOD__);

        return $pathToFile;
    }

    public function getMedia($fileCode): string
    {
        Debugbar::info(__METHOD__);

        return $fileCode;
    }

}
