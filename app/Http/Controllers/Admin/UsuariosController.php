<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\DificuldadeUsuarioRepository;
use App\Repositories\PalavraRepository;
use App\Services\UsuariosService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    protected $usuarioService;
    protected $palavraRepository;
    protected $dificuldadeUsuariosRepository;

    public function __construct(UsuariosService $usuariosService, PalavraRepository $palavraRepository, DificuldadeUsuarioRepository $dificuldadeUsuariosRepository)
    {
        $this->usuarioService = $usuariosService;
        $this->palavraRepository = $palavraRepository;
        $this->dificuldadeUsuariosRepository = $dificuldadeUsuariosRepository;

    }

    public function store(Request $request)
    {
        $usuario = $this->usuarioService->adicionaUsuario($request->all());

        return response()->json($usuario->id);

    }
}
