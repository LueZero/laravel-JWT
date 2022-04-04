<?php

namespace App\Http\Controllers\View;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function loginView(Request $data)
    {
        $token = Session::get('test', 0);
        return view('login', compact('token'));
    }

    public function userView(Request $data)
    {
        $token = Session::get('test', 0);
        return view('user', compact('token'));
    }
}
