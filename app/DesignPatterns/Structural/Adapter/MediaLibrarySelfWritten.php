<?php

namespace App\DesignPatterns\Structural\Adapter;

use App\DesignPatterns\Structural\Adapter\Interfaces\MediaLibraryInterface;
use Barryvdh\Debugbar\Facades\Debugbar;

class MediaLibrarySelfWritten implements MediaLibraryInterface
{
    public function upload($pathToFile): string
    {
        Debugbar::info(__METHOD__);

        return $pathToFile;
        // return md5(__METHOD__ . $pathToFile);

    }

    public function get($fileCode): string
    {
        Debugbar::info(__METHOD__);

        return $fileCode;
    }


}
