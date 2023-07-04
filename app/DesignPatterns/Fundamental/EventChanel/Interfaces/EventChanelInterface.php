<?php

namespace App\DesignPatterns\Fundamental\EventChanel\Interfaces;

use App\DesignPatterns\Fundamental\EventChanel\Interfaces\SubscriberInterface;

interface EventChanelInterface
{
    public function publish($topic, $data);

    public function subscribe($topic, SubscriberInterface $subscriber);

}
