<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegisterFormRequest;
use App\Model\Userstest;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    //註冊
    public function register(Request $request)
    {   
        $data = [
            'email'=> $request->email,
            'name'=>$request->name,
            'password'=>bcrypt($request->password),
        ];
      
        $user = new Userstest;
        $user->insert($data);

        return response([
            'status' => 'success',
        ], 200);
    }




    //登入
    public function login(Request $request)
    {   
        $credentials = $request->only('email', 'password');//取信箱及密碼去驗證

        if ( ! $token = JWTAuth::attempt($credentials) ) {
            return response([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400);
        }

        return response(['status' => 'success'])->header('Authorization', $token);
    }






    //查看
    public function user(Request $request)
    {   
        $token = JWTAuth::getToken();
        $user = auth()->user();
        return response([
            'status' => 'success',
            'data' => $user
        ],200);
    }





    //登出
    public function refresh()
    {
        return response([
           'status' => 'success'
        ],200);
    }
    
}
