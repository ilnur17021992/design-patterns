<?php

namespace App\DesignPatterns\Fundamental\EventChanel;

use App\DesignPatterns\Fundamental\EventChanel\Interfaces\EventChanelInterface;
use App\DesignPatterns\Fundamental\EventChanel\Interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{
    private $topics;
    private $eventChanel;

    public function __construct($topic, EventChanelInterface $eventChanel)
    {
        $this->topics = $topic;
        $this->eventChanel = $eventChanel;
    }

    public function publish($data)
    {
        $this->eventChanel->publish($this->topics, $data);
    }

}
