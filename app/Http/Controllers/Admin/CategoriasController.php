<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoriasCreateRequest;
use App\Http\Requests\CategoriasUpdateRequest;
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

    public function index(Request $request)
    {
        $categorias = $this->categoriaRepository->buscaTodasCategorias();

        if ($request->ajax()) {
            $categorias = $this->categoriaRepository->buscaCategoriasAjax($request->categoria);

            return view('admin.categorias.load', compact('categorias'))->render();
        }

        return view('admin.categorias.index', compact('categorias'));

    }

    public function show($id)
    {
        $categoria = $this->categoriaRepository->find($id);

        return view('admin.categorias.show', compact('categoria'));
    }

    public function create()
    {
        return view('admin.categorias.create');
    }

    public function store(CategoriasCreateRequest $request)
    {
        $this->categoriaRepository->create($request->all());

        flash('Categoria inserida com sucesso.')->success();
        return redirect()->back();
    }

    public function update(CategoriasUpdateRequest $request, $id)
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
