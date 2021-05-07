<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(){

        return view('user.create');
    }

    public function storeUser(Request $request){
        dd($request->all());
    }
}
