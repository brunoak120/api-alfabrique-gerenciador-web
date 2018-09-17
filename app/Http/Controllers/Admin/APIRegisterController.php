<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\APIRegisterRequest;
use App\Services\UsuariosService;
use App\Http\Controllers\Controller;
use JWTAuth;
use JWTFactory;

class APIRegisterController extends Controller
{
    protected $usuarioService;

    public function __construct(UsuariosService $usuariosService)
    {
        $this->usuarioService = $usuariosService;

    }
    public function register(APIRegisterRequest $request)
    {

        $usuario = $this->usuarioService->adicionaUsuario($request->all());
        $token = JWTAuth::fromUser($usuario);

        return response()->json(compact('token'));
    }
}
