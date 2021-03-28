<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use Illuminate\Http\Request;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Polling;
use SergiX44\Nutgram\RunningMode\Webhook;
use SergiX44\Nutgram\Telegram\Attributes\ParseMode;

class TGBotController extends Controller
{

    // https://api.telegram.org/bot979455977:AAELJHZe1UcWNrcuOYMK73yKSZkaBVCuC5c/setWebhook?url=https://itschools.uz/tg/bot/9393939302-1lwlw0
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

        // $bot = new Nutgram($_ENV['TELEGRAM_TOKEN']); // new instance
                 
        //         $bot->onMessage(function (Nutgram $bot) {
        //             $bot->sendMessage('You sent a message!');
        //         });
                 
        //         $message = $bot->sendMessage('Hi!', ['chat_id' => 1289432718]);

               
        //     $bot->setRunningMode(Webhook::class);

        //     $bot->run();

                $bot = app(Nutgram::class); // also app('nutgram') is a valid alias
                $bot->onMessage(function (Nutgram $bot) {
                    $bot->sendMessage('You sent a message!');
                $message = $bot->sendMessage('Hi!', ['chat_id' => 1289432718]);
                });

                $message = $bot->sendMessage('*Hi!*', [
                    'chat_id' => 1289432718,
                    'parse_mode' => ParseMode::MARKDOWN,
                ]);

                 


         
    }

    // itschools origin
}
