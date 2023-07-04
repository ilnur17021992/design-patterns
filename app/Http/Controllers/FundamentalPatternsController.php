<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignPatterns\Fundamental\Delegation\AppMessenger;
use App\DesignPatterns\Fundamental\EventChanel\EventChanel;
use App\DesignPatterns\Fundamental\EventChanel\Publisher;
use App\DesignPatterns\Fundamental\EventChanel\Subscriber;
use App\DesignPatterns\Fundamental\PropertyContainer\BlogPost;

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

    public function eventChanel()
    {
        $chanel = new EventChanel();

        $hightNews = new Publisher('hight-news', $chanel);
        $winterNews = new Publisher('winter-news', $chanel);
        $winterNewsDaily = new Publisher('winter-news', $chanel);
        
        $alex = new Subscriber('alex');
        $max = new Subscriber('max');
        $anna = new Subscriber('anna');
        $elena = new Subscriber('elena');
        
        $chanel->subscribe('hight-news', $anna);
        $chanel->subscribe('hight-news', $alex);
        $chanel->subscribe('hight-news', $max);
        $chanel->subscribe('winter-news', $max);
        $chanel->subscribe('winter-news', $elena);
        
        $hightNews->publish('hight news');
        $winterNews->publish('winter news');
        $winterNewsDaily->publish('winter daily news');

        dump($hightNews);
        dump($winterNews);
        dump($winterNewsDaily);
    }
}
