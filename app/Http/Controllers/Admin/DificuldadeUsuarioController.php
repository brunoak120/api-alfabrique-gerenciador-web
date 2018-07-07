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

    public function index()
    {
        $dificuldadesUsuarios = $this->dificuldadeUsuarioRepository->paginate(15);

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
