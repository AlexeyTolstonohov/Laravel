<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function createUser()
    {
        return view('user.createUser');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'avatar'   => 'nullable|image',
        ]);

        $avatar = $request->file('avatar')->store('images');

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'avatar'   => $avatar,
        ]);

        $request->session()->flash('success', 'successful registration');
        Auth::login($user);

        return view('user.createUser');
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $request->validate(['email' => 'required|email', 'password' => 'required']);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('login');
        }

        return redirect()->back()->with('error', 'incorrect login or password');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('register.createUser');
    }
}
