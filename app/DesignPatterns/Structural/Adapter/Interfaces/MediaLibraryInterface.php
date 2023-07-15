<?php

namespace App\DesignPatterns\Structural\Adapter\Interfaces;

interface MediaLibraryInterface
{
    public function upload($pathToFile): string;

    public function get($fileCode): string;
}
