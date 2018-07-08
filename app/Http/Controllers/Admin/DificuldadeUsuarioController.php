<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\DificuldadeUsuarioRepository;
use Illuminate\Http\Request;

class DificuldadeUsuarioController extends Controller
{
    protected $dificuldadeUsuarioRepository;

    public function __construct(DificuldadeUsuarioRepository $dificuldadeUsuarioRepository)
    {
        $this->dificuldadeUsuarioRepository = $dificuldadeUsuarioRepository;
    }

    public function index(Request $request)
    {
        $dificuldadesUsuarios = $this->dificuldadeUsuarioRepository->buscaTodasDificuldadesUsuarios();

        if ($request->ajax()) {
            $dificuldadesUsuarios = $this->dificuldadeUsuarioRepository->buscaDificuldadesUsuariosAjax($request->dificuldade_usuario);

            return view('admin.dificuldades_usuarios.load', compact('dificuldadesUsuarios'))->render();
        }

        return view('admin.dificuldades_usuarios.index', compact('dificuldadesUsuarios'));
    }

    public function show($id)
    {
        $dificuldadeUsuario = $this->dificuldadeUsuarioRepository->find($id);

        return view('admin.dificuldades_usuarios.show', compact('dificuldadeUsuario'));
    }

    public function update(Request $request, $id)
    {
        $this->dificuldadeUsuarioRepository->update(['peso' => $request->peso], $id);

        flash('Dificuldade Usuário atualizada com sucesso.')->success();
        return redirect()->back();
    }

}
