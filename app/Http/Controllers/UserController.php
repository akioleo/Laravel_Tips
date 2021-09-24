<?php

namespace App\Http\Controllers;

use app\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ListUser()
    {
        $user = new User();
        echo "Listagem de usuario";
    }
}
