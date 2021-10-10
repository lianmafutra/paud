<?php

namespace App\Http\Traits;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

/**
 * Kirim Notif ke Telegram Bot 
 */
trait SendTele
{
    public function notifTele(string $message) {
        $chat_id= '1105999838';
        $bot_token = '1689831164:AAEytCExkIzDriaAo8M6T7-5G2o4MCB81GA';
        $client = new Client();
        $client->getAsync(
            'https://api.telegram.org/bot'.$bot_token.'/sendMessage?chat_id='.$chat_id.'&text='."message : ".$message."\n \nTime : ". Carbon::now() . "\nURL : ".url()->current()."\nUser : ".Auth::user()->username . "\nIP Address : ".\Request::ip())->wait() ;       
    }
}
