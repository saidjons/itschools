<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use Illuminate\Http\Request;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Polling;
use SergiX44\Nutgram\RunningMode\Webhook;

class TGBotController extends Controller
{
    //

    public function hello()
    {
     

//         $telegram= new Api(env('TELEGRAM_TOKEN'));
// $response = $telegram->getMe();

// $botId = $response->getId();
// $firstName = $response->getFirstName();
// $username = $response->getUsername();
// $updates = $telegram->getWebhookUpdate();


// dd($updates,$botId,$firstName,$username);





        // this is ntgram  

        $bot = new Nutgram($_ENV['TELEGRAM_TOKEN']); // new instance
            $bot->setRunningMode(Polling::class);
                 
                $bot->onMessage(function (Nutgram $bot) {
                    $bot->sendMessage('You sent a message!');
                });
                // $updates = $bot->getUpdates();

                // dd( $bot);


       
            // ...

            $bot->run();




         
    }

    // itschools origin
}
