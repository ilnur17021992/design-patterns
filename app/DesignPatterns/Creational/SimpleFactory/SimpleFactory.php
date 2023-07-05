<?php

namespace App\DesignPatterns\Creational\SimpleFactory;

use App\DesignPatterns\Fundamental\Delegation\AppMessenger;
use App\DesignPatterns\Fundamental\Delegation\Interfaces\MessengerInterface;
use App\DesignPatterns\Creational\SimpleFactory\Interfaces\MessengerSimpleFactoryInterface;

class SimpleFactory implements MessengerSimpleFactoryInterface
{
    public function build(string $type = 'email'): MessengerInterface
    {
        $messenger = new AppMessenger();

        return match ($type) {
            'email' => $messenger->toEmail()
                ->setSender('sender@gmail.com')
                ->setRecipient('recipient@gmail.com')
                ->setMessage('Hello email message'),
            'sms' => $messenger->toSms()
                ->setSender('+123456789')
                ->setRecipient('+777777777')
                ->setMessage('Hello sms message'),
            default => throw new \Exception("Invalid messenger type: [{$type}]"),
        };
    }
}
