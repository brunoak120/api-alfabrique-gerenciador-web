<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
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
}
