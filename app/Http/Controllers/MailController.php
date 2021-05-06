<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Mail;
use App\User;


class HomeController extends Controller{
    public function sendMail(){
        Mail::to('some@gmail.com')->send(new TestMail());  //нет такого и настройки надо выставить в .env  и почту написать реальную
        return view('send');
    }
}

?>
