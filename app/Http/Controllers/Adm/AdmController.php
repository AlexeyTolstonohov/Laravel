<?php

namespace App\Http\Controllers\Adm;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{
    public function index(){
        dump(Auth::user()->name);
        return 'Hello World Contoller Admin';

    }

    public function test(){
        return __METHOD__;
    }
}
?>
