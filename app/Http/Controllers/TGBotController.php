<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use Illuminate\Http\Request;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Polling;
use SergiX44\Nutgram\RunningMode\Webhook;
use Telegram\Bot\Laravel\Facades\Telegram;
use SergiX44\Nutgram\Telegram\Attributes\ParseMode;

class TGBotController extends Controller
{

    // https://api.telegram.org/bot979455977:AAELJHZe1UcWNrcuOYMK73yKSZkaBVCuC5c/setWebhook?url=https://itschools.uz/tg/bot/9393939302-1lwlw0
    //

    public function hello()
    {
     
         
            $keyboard = [
                ['7', '8', '9'],
                ['4', '5', '6'],
                ['1', '2', '3'],
                    ['0']
            ];

            $reply_markup = Telegram::replyKeyboardMarkup([
                'keyboard' => $keyboard, 
                'resize_keyboard' => true, 
                'one_time_keyboard' => true
            ]);

            $response = Telegram::sendMessage([
                'chat_id' => '1289432718', 
                'text' => 'Hello World', 
                'reply_markup' => $reply_markup
            ]);

// dd($updates,$botId,$firstName,$username);





            // $bot = app(Nutgram::class); // also app('nutgram') is a valid alias
                // $bot->onMessage(function (Nutgram $bot) {
                //     $bot->sendMessage('You sent a message!');
                // $message = $bot->sendMessage('Hi!', ['chat_id' => 1289432718]);
                // });

                // $message = $bot->sendMessage('*Hi!*', [
                //     'chat_id' => 1289432718,
                //     'parse_mode' => ParseMode::MARKDOWN,
                // ]);

                 


         
    }

    // itschools origin
}
