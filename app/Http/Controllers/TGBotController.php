<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Polling;
use SergiX44\Nutgram\RunningMode\Webhook;

class TGBotController extends Controller
{
    //

    public function hello()
    {
     

        //this is ntgram  

        $bot = new Nutgram($_ENV['TOKEN']); // new instance
            $bot->setRunningMode(Webhook::class);
                 $bot->onMessage('you send a message');
        $bot->onText('My name is {name}', function (Nutgram $bot, $name) {
            $bot->sendMessage("Hi {$name}");
        });

        // ex. called when a message contains "I want 6 pizzas"
        // $bot->onText('hey', function (Nutgram $bot, $n) {
        //     $bot->sendMessage("You will get {$n} pizzas!");
        // });

        $bot->onText('hey ([0-9]+))', function (Nutgram $bot, $amount, $dish) {
            $bot->sendMessage("You will get {$amount} portions of  !");
        });

            // ...

            $bot->run();




         
    }

    // itschools origin
}
