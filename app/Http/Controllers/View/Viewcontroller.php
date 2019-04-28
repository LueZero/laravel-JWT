<?php

namespace App\Http\Controllers\View;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Viewcontroller extends Controller
{
    
    public function loginview (Request $data){
        $token = Session::get('test',0);
        return view('login',compact('token'));   
    }

    public function userview (Request $data){
       
        $token = Session::get('test',0);
        return view('user',compact('token'));   
    }
}
