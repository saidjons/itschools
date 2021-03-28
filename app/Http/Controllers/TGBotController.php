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
                 
                $bot->onMessage(function (Nutgram $bot) {
                    $bot->sendMessage('You sent a message!');
                });
                // $updates = $bot->getUpdates();
                $message = $bot->sendMessage('Hi!'.$bot->getMe(), ['chat_id' => 1289432718]);

                // dd( $bot);


       
            // ...
            $bot->setRunningMode(Webhook::class);

            $bot->run();




         
    }

    // itschools origin
}
