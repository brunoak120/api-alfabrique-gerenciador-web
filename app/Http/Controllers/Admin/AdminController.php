<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CidadeRepository;
use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $usuarioRepository;
    protected $cidadeRepository;

    public function __construct(UsuarioRepository $usuarioRepository, CidadeRepository $cidadeRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
        $this->cidadeRepository = $cidadeRepository;
    }
    public function index()
    {
        return view('admin.home.index');
    }

    public function pass()
    {
        return view('admin.pass');
    }

    public function change_pass(Request $request, $id)
    {
        $this->usuarioRepository->update(['password' => $request->new_pass], $id);

        flash('Senha alterada com sucesso.')->success();
        return redirect()->back();
    }

    public function profile()
    {
        $usuario = $this->usuarioRepository->find(auth()->user()->id);
        $cidade = $this->cidadeRepository->find($usuario->endereco->cidade_id);
        dd($cidade);

        return view('admin.profile', compact('usuario'));
    }
}
