<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminChangePassRequest;
use App\Repositories\CidadeRepository;
use App\Repositories\EstadoRepository;
use App\Repositories\UsuarioRepository;
use App\Services\UsuariosService;
use Illuminate\Http\Request;
use Correios;
use Illuminate\Support\Facades\Hash;

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

    public function change_pass(AdminChangePassRequest $request, $id)
    {
        if(!Hash::check($request->old_pass, auth()->user()->getAuthPassword())) {
           flash('Senha antiga não confere.')->error();
           return redirect()->back();
        }

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

    public function getDadosCep($cep)
    {

        $dados = Correios::cep($cep);
        $estado = $this->estadosRepository->findWhere(['sigla' => $dados['uf']])->first();
        $cidade = $this->cidadeRepository->findWhere(['nome' => $dados['cidade']])->first();
        $resultado = array_merge($dados, ['estado_id' => $estado->id, 'cidade_id' => $cidade->id]);

        return response()->json($resultado);
    }

    public function changeProfile(Request $request, $id)
    {
        $this->usuariosService->atualizaUsuario($request, $id);

        flash('Usuário altetado com sucesso.')->success();
        return redirect()->back();
    }
}
