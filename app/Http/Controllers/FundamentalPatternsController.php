<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignPatterns\Fundamental\BlogPost;
use App\DesignPatterns\Fundamental\Delegation\AppMessenger;

class FundamentalPatternsController extends Controller
{
    public function propertyContainer()
    {
        $blog = new BlogPost();
        $blog->setTitle('Заголовок статьи');
        $blog->setCategoryId(7);

        $blog->addProperty('view_count', 10);
        $blog->addProperty('last_update', '2021-01-01 00:00:00');
        dump($blog->getProperty('last_update')); // 2021-01-01

        $blog->addProperty('last_update', '2021-02-02 00:00:00');
        dump($blog->getProperty('last_update')); // 2021-02-02

        $blog->addProperty('read_only', true);
        dump($blog->getProperty('read_only')); // true

        $blog->deleteProperty('read_only');
        dump($blog->getProperty('read_only')); // null

        dump($blog);
    }

    public function delegation()
    {
        $messenger = new AppMessenger();

        $messenger->setSender('sender@gmail.com')
            ->setRecipient('recipient@gmail.com')
            ->setMessage('Hello email message')
            ->send();

        dump($messenger);

        $messenger->toSms()
            ->setSender('+123456789')
            ->setRecipient('+777777777')
            ->setMessage('Hello sms message')
            ->send();

        dump($messenger);
    }
}
