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

        flash('Categoria inserida com sucesso.')->success();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $this->categoriaRepository->update($request->all(), $id);

        flash('Categoria atualizada com sucesso.')->success();
        return redirect()->back();
    }

    public function destroy(Request $request)
    {

        try {

            $removido = $this->categoriaRepository->delete($request->id);

            return response()->json($removido);
        } catch (\Exception $e) {

            echo $e->getMessage();

            exit;
        }
    }
}
