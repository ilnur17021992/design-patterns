<?php

namespace App\DesignPatterns\Fundamental\Delegation\Messengers;

use App\DesignPatterns\Fundamental\Delegation\Interfaces\MessengerInterface;

abstract class AbstractMessenger implements MessengerInterface
{
    protected $sender;
    protected $recipient;
    protected $message;

    public function setSender($value): MessengerInterface
    {
        $this->sender = $value;

        return $this;
    }

    public function setRecipient($value): MessengerInterface
    {
        $this->recipient = $value;

        return $this;
    }

    public function setMessage($value): MessengerInterface
    {
        $this->message = $value;

        return $this;
    }

    public function send(): bool
    {
        return true;
    }
}
