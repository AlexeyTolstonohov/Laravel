<?php

namespace App\Http\Controllers\Adm;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function index(){
        return 'Hello World Contoller Admin';
    }

    public function test(){
        return __METHOD__;
    }
}
?>
