<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('layouts.chat');
    }

    public function tesChat()
    {
        return view('test.template_chat');
    }

    public function tesLogin()
    {
        return view('test.template_login');
    }

    public function tesRegister()
    {
        return view('test.template_register');
    }
}