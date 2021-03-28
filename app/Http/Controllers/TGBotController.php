<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use Illuminate\Http\Request;
use SergiX44\Nutgram\Nutgram;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Storage;
use SergiX44\Nutgram\RunningMode\Polling;
use SergiX44\Nutgram\RunningMode\Webhook;

use Telegram\Bot\Laravel\Facades\Telegram;
use SergiX44\Nutgram\Telegram\Attributes\ParseMode;
use SergiX44\Nutgram\Telegram\Attributes\MessageTypes;

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
                // $bot->onMessage(function (Nutgram $bot) {
                    
                // $message = $bot->sendMessage('Hi', ['chat_id' => $bot->message()->user->id]);
                // });

                $message = $bot->sendMessage(json_encode($bot->message()), [
                    'chat_id' => 1289432718,
                    'parse_mode' => ParseMode::MARKDOWN,
                ]);

            //     $bot->onMessage(function (Nutgram $bot) {
            //     $bot->sendMessage(json_encode($bot->message()));
            // });
            //      $path = Storage::path('img/logo.png');
            // Called only when you send a photo
            $bot->onMessageType(MessageTypes::PHOTO, function (Nutgram $bot) {
                $photos = $bot->message()->photo;
                $bot->sendMessage('Nice pic!');
            });

             $bot->onMessageType(MessageTypes::VOICE, function (Nutgram $bot) {
                $photos = $bot->message()->photo;
                $bot->sendMessage('Nice VOICE!');
            });

             $bot->onMessageType(MessageTypes::VIDEO, function (Nutgram $bot) {
                $photos = $bot->message()->photo;
                $bot->sendMessage('Nice VIDEO!');
            });

             $bot->onMessageType(MessageTypes::TEXT, function (Nutgram $bot) {
                $photos = $bot->message()->photo;
                $bot->sendMessage('Nice text!');
            });



            // $localFile=fopen($path,'r');

            //  $bot->sendPhoto($localFile,['chat_id' => 1289432718]);

                // $file = $bot->getFile("AgACAgIAAxkBAAIB7mBghOqzzOh5KF2S8uaZvGXsbddFAAKUtjEbyVsAAUvxYxs_tp5G1XB1z6IuAAMBAAMCAANtAANWZgACHgQ");

                


            $bot->run();

                 


         
    }

    // itschools origin
}
