<?php

namespace App\DesignPatterns\Creational\StaticFactory;

use App\DesignPatterns\Creational\StaticFactory\Interfaces\MessengerStaticFactoryInterface;
use App\DesignPatterns\Fundamental\Delegation\AppMessenger;
use App\DesignPatterns\Fundamental\Delegation\Interfaces\MessengerInterface;

class StaticFactory implements MessengerStaticFactoryInterface
{
    public static function build(string $type = 'email'): MessengerInterface
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
