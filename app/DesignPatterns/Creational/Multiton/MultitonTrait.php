<?php

namespace App\DesignPatterns\Creational\Multiton;

use App\DesignPatterns\Creational\Multiton\Interfaces\MultitonInterface;

trait MultitonTrait
{
    protected static $instances = [];
    private $name;

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
        throw new \Exception('Cannot unserialize a singleton');
    }

    public static function getInstance(string $name): MultitonInterface
    {
        if (isset(static::$instances[$name])) {
            return static::$instances[$name];
        }

        static::$instances[$name] = new static();
        static::$instances[$name]->setName($name);

        return static::$instances[$name];
    }

    public function setName($value)
    {
        $this->name = $value;

        return $this;
    }

}
