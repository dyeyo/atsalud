<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class Functions extends Controller
{
    public function generator_password()
    {
        $chain = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $chainLength = strlen($chain);
        $pass = "";
        $passLength = 10;
        for ($i = 1; $i <= $passLength; $i++) {
            $pos = rand(0, $chainLength - 1);
            $pass .= substr($chain, $pos, 1);
        }
        return $pass;
    }

    public function send_email($addressee , $affair, $content, $response)
    {
        $data = array('content' => $content, 'response' => $response);
        Mail::send('mail.mail', $data, function ($message) use ($affair, $addressee) {
            $message->from('soporte.rasoftdev@gmail.com', 'Soporte atssalud.com');
            $message->to($addressee)->subject($affair);
        });
    }
}
