<?php

namespace App\Http\Controllers;

use Response;
use Cookie;
use Session;
use App\Http\Requests\RegisterFormRequest;
use App\Models\UsersTest;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class AuthController extends Controller
{
    //註冊
    public function register(Request $request)
    {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ];

        $user = new UsersTest;
        $user->insert($data);

        return response([
            'status' => 'success',
        ], 200);
    }

    //登入
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password'); //取信箱及密碼去驗證
        
        if (!$token = JWTAuth::attempt($credentials)) {
            return response([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400);
        }

        Session::put('test', $token);
        return response()->json(['status' => 'success', '_token' => $token], 200)->header('Authorization', $token);
    }

    //查看
    public function user(Request $request)
    {
        $token = JWTAuth::getToken();
        $user = auth()->user();
        return response([
            'status' => 'success',
            'data' => $user
        ], 200);
    }

    //登出
    public function refresh()
    {
        return response([
            'status' => 'success'
        ], 200);
    }
}
