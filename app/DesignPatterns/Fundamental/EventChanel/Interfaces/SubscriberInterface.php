<?php

namespace App\DesignPatterns\Fundamental\EventChanel\Interfaces;

interface SubscriberInterface
{
    public function notify($data);

    public function getName();
}
