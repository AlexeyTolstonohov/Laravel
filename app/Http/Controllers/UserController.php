<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller


{
    public function createUser(){

        return view('user.createUser');
    }

    public function storeUser(Request $request){
        //dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        session()->flash('success', 'succsessful registration');
        Auth::login($user);
        return view('layouts.form');

    }
}
