<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SergiX44\Nutgram\Nutgram;

class TGBotController extends Controller
{
    //

    public function hello()
    {
     

        $bot = new Nutgram($_ENV['979455977:AAELJHZe1UcWNrcuOYMK73yKSZkaBVCuC5c']);
        
        // ex. called when a message contains "My name is Mario"
        $bot->onText('My name is {name}', function (Nutgram $bot, $name) {
            $bot->sendMessage("Hi {$name}");
        });

        // ex. called when a message contains "I want 6 pizzas"
        $bot->onText('I want ([0-9]+) pizzas', function (Nutgram $bot, $n) {
            $bot->sendMessage("You will get {$n} pizzas!");
        });

        $bot->onText('I want ([0-9]+) portions of (pizza|cake)', function (Nutgram $bot, $amount, $dish) {
            $bot->sendMessage("You will get {$amount} portions of {$dish}!");
        });

        $bot->run();
    }

    // itschools origin
}
