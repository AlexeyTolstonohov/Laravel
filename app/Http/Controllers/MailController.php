<?php

namespace App\Http\Controllers;
use App\Mail\OrderShipped;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;


class MailController extends Controller{
    public function sendMail(Request $request){
        /*Mail::to('some@gmail.com')->send(new OrderShipped($order));  //нет такого и настройки надо выставить в .env  и почту написать реальную  */
        $details =[
            'title' => 'Mail from Laravel 8',
            'body' => 'text from Laravel'
        ];

        if(Mail::to('beckon.frensis@yandex.ru')->send(new TestMail($details))){
            dump('sended');
        }else{
            dump(' not sended');
        }

    }
}

?>
