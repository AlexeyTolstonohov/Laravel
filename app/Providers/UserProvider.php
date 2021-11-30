<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class User2 extends Controller
{
    public $data =[
        'name', 'email', 'password'
    ];

    public function create2($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function create($data)
    {
        $this->name = $data->name;
        $this->email = $data->email;
        $this->password = $data->password;
    }
}
?>
