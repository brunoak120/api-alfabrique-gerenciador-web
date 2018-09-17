<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\APILoginRequest;
use App\Http\Controllers\Controller;
use JWTAuth;

class APILoginController extends Controller
{
    public function login(APILoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['errors' => ['error' => ['Email ou senha inválidos.']]], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['errors' => ['error' => ['Falha ao gerar token de acesso.']]], 500);
        }
        return response()->json(compact('token'));
    }
}
