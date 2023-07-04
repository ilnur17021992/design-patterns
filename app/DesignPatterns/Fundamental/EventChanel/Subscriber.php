<?php

namespace App\DesignPatterns\Fundamental\EventChanel;

use App\DesignPatterns\Fundamental\EventChanel\Interfaces\SubscriberInterface;
use Barryvdh\Debugbar\Facades\Debugbar;

class Subscriber implements SubscriberInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        Debugbar::info("{$this->getName()} получил(-а) уведомление $data");
    }

    public function getName()
    {
        return $this->name;
    }
}
