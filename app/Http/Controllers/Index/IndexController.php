<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Model\User;

class IndexController extends Controller
{
    public function userLogin()
    {
        $user = User::find(1);

        $token = auth('api')->login($user);

        return $this->respondWithToken($token);
    }

    public function userMe()
    {
        $user = auth('api')->user();
        dd($user);
    }


    // 退出登录
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    // 刷新token
    public function refresh()
    {
        $newToken = auth('api')->refresh();

        return $this->respondWithToken($newToken);
    }


    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60 // token什么时候过期
        ]);
    }
}
