<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tesChat()
    {
        return view('tes-chat');
    }

    public function tesLogin()
    {
        return view('tes-login');
    }

    public function tesRegister()
    {
        return view('tes-register');
    }
}