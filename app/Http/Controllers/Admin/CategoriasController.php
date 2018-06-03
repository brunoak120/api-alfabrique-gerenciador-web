<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CategoriaRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    protected $categoriaRepository;

    public function __construct(CategoriaRepository $categoriaRepository)
    {
        $this->categoriaRepository = $categoriaRepository;

    }

    public function create()
    {
        return view('admin.categorias.create');
    }

    public function index()
    {
        $categorias = $this->categoriaRepository->all();

        return view('admin.categorias.index', compact('categorias'));
    }

    public function show($id)
    {
        $categoria = $this->categoriaRepository->find($id);

        return view('admin.categorias.show', compact('categoria'));
    }

    public function store(Request $request)
    {
        $this->categoriaRepository->create($request->all());

        return redirect()->back()->with('sucess', 'Categoria inserida com sucesso');
    }

    public function update(Request $request, $id)
    {
        $this->categoriaRepository->update($request->all(), $id);

        return redirect()->back()->with('sucess', 'Categoria atualizada com sucesso');
    }

    public function destroy($id)
    {
        $this->categoriaRepository->delete($id);

        return redirect()->back()->with('success', 'Categoria removida com sucesso');
    }
}
