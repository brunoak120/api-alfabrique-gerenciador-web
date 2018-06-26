<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\UsuarioRepository;
use App\Services\UsuariosService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    protected $usuarioService;

    public function __construct(UsuariosService $usuariosService)
    {
        $this->usuarioService = $usuariosService;

    }

    public function store(Request $request)
    {
        $usuario = $this->usuarioService->adicionaUsuario($request->all());

        return response()->json($usuario->id);

    }
}
