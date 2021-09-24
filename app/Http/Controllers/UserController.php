<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function ListUser()
    {
//         $user = new User();
//         $user -> name = 'Leonardo Akio';
//         $user -> email = 'teste@teste.com.br';
//         $user -> password = Hash::make('password');
//         $user -> save();
        $user = User::where('id', '=', 1)->first();
        return view ('listUser', [
            'userList' => $user

        ]);
    }
}
