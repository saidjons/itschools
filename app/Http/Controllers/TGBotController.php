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
                 
                $bot->onMessage(function (Nutgram $bot) {
                    $bot->sendMessage('You sent a message!');
                });


       
            // ...

            $bot->run();




         
    }

    // itschools origin
}
