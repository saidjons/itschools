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
                    
                $message = $bot->sendMessage('Hi', ['chat_id' => $bot->message()->user->id]);
                });

                $message = $bot->sendMessage(json_encode($bot->message()), [
                    'chat_id' => 1289432718,
                    'parse_mode' => ParseMode::MARKDOWN,
                ]);

            //     $bot->onMessage(function (Nutgram $bot) {
            //     $bot->sendMessage(json_encode($bot->message()));
            // });
        $path = Storage::path('/img/logo.png');

            $localFile=fopen($path,'r');

             $bot->sendPhoto($localFile,['chat_id' => 1289432718]);

                $file = $bot->getFile("AgACAgIAAxkBAAIB7mBghOqzzOh5KF2S8uaZvGXsbddFAAKUtjEbyVsAAUvxYxs_tp5G1XB1z6IuAAMBAAMCAANtAANWZgACHgQ");

                // $down=$bot->downloadFile($file, public_path());

                $bot->sendMessage(json_encode($file));

            $bot->run();

                 


         
    }

    // itschools origin
}
