<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignPatterns\Behavioral\Strategy\Context;
use App\DesignPatterns\Behavioral\Strategy\StrategyA;
use App\DesignPatterns\Behavioral\Strategy\StrategyB;

class BehavioralPatternsController extends Controller
{
    public function strategy()
    {
        $context = new Context(new StrategyA());
        $result = $context->doSomeBusinessLogic();
        dump($result);
        
        $context->setStrategy(new StrategyB());
        $result = $context->doSomeBusinessLogic();
        dump($result);
    }
}
