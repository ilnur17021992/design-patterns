<?php

namespace App\DesignPatterns\Fundamental\EventChanel;

use Barryvdh\Debugbar\Facades\Debugbar;
use App\DesignPatterns\Fundamental\EventChanel\Interfaces\SubscriberInterface;
use App\DesignPatterns\Fundamental\EventChanel\Interfaces\EventChanelInterface;


class EventChanel implements EventChanelInterface
{
    private $topics = [];

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;

        Debugbar::info("{$subscriber->getName()} подписан(-a) на $topic");
    }

    public function publish($topic, $data)
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($data);
        }
    }

}
