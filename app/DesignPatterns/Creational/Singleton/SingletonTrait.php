<?php

namespace App\DesignPatterns\Creational\Singleton;

trait SingletonTrait
{
    private static $instance = null;

    private function __construct()
    {
        //
    }

    private function __clone()
    {
        //
    }

    public function __wakeup()
    {
        throw new \Exception('Cannot unserialize singleton');
    }

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }
}
