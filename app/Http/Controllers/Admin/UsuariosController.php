<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\DificuldadeUsuarioRepository;
use App\Repositories\PalavraRepository;
use App\Repositories\UsuarioRepository;
use App\Services\UsuariosService;
use Illuminate\Database\QueryException;
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

    public function findWord()
    {
        $dificuldadesUsuarios = $this->dificuldadeUsuariosRepository->findWhere(['usuario_id' => 3]);
        $palavra = $this->palavraRepository->buscaPalavraCompativel($dificuldadesUsuarios);

        return response()->json($dificuldadesUsuarios);
    }
}
