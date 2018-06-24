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
        return view('admin.dificuldades_usuarios.index');
    }

    public function show($id)
    {
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy(Request $request)
    {
        
    }
}
