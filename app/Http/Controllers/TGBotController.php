<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use Illuminate\Http\Request;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Polling;
use SergiX44\Nutgram\RunningMode\Webhook;
use Telegram\Bot\Laravel\Facades\Telegram;
use SergiX44\Nutgram\Telegram\Attributes\ParseMode;

use function GuzzleHttp\json_decode;

class TGBotController extends Controller
{

    // https://api.telegram.org/bot979455977:AAELJHZe1UcWNrcuOYMK73yKSZkaBVCuC5c/setWebhook?url=https://itschools.uz/tg/bot/9393939302-1lwlw0
    //

    public function hello()
    {
        // $telegram = new Api(env('TELEGRAM_TOKEN'));
        // $updates = Telegram::getWebhookUpdates();

        // Telegram::sendChatAction([
        //     'chat_id' => $updates->message->from->id, 
        //     'action' => 'upload_photo'
        //     ]);

        // $response = Telegram::getUserProfilePhotos(['user_id' => '1289432718']);

        // $photos_count = $response->getTotalCount();
        // $photos = $response->getPhotos();
      


        // $response = Telegram::sendMessage([
        // 'chat_id' => $updates->message->from->id, 
        // 'text' =>json_encode($response).' count '.$photos_count,
        // ]); 


        // $response = Telegram::sendMessage([
        // 'chat_id' => $updates->message->from->id, 
        // 'text' => $updates->message->from->id,
        // ]);
    

// dd($updates,$botId,$firstName,$username);





            $bot = app(Nutgram::class); // also app('nutgram') is a valid alias
                $bot->onMessage(function (Nutgram $bot) {
                    $bot->sendMessage('You sent a message!');
                $message = $bot->sendMessage('Hi!', ['chat_id' => 1289432718]);
                });

                $message = $bot->sendMessage('*Hi!*', [
                    'chat_id' => 1289432718,
                    'parse_mode' => ParseMode::MARKDOWN,
                ]);

                $bot->onMessage(function (Nutgram $bot) {
                $bot->sendMessage('You sent a message!');
            });

            $bot->run();

                 


         
    }

    // itschools origin
}
