<?php

namespace App\DesignPatterns\Structural\Adapter\Interfaces;

interface MediaLibraryThirdPartyInterface
{
    public function addMedia($pathToFile): string;

    public function getMedia($fileCode): string;
}
