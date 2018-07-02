<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CidadeRepository;
use App\Repositories\EstadoRepository;
use App\Repositories\UsuarioRepository;
use App\Services\UsuariosService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    protected $usuarioRepository;
    protected $estadosRepository;
    protected $cidadeRepository;
    protected $usuariosService;

    public function __construct(UsuarioRepository $usuarioRepository, CidadeRepository $cidadeRepository, EstadoRepository $estadosRepository, UsuariosService $usuariosService)
    {
        $this->usuarioRepository = $usuarioRepository;
        $this->cidadeRepository = $cidadeRepository;
        $this->estadosRepository = $estadosRepository;
        $this->usuariosService = $usuariosService;
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
        $estados = $this->estadosRepository->all();
        $cidades = $this->cidadeRepository->all();
        $cidadeUsuario = $this->cidadeRepository->find($usuario->endereco->cidade_id);

        return view('admin.profile', compact('usuario', 'cidadeUsuario','cidades', 'estados'));
    }

    public function getCidades($id)
    {
        $cidades = $this->cidadeRepository->findWhere(['estado_id' => $id]);

        return response()->json($cidades);
    }

    public function changeProfile(Request $request, $id)
    {
        $this->usuariosService->atualizaUsuario($request, $id);

        flash('Usuário altetado com sucesso.')->success();
        return redirect()->back();
    }
}
