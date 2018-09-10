<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaracteristicasCreateRequest;
use App\Http\Requests\CaracteristicasUpdateRequest;
use App\Repositories\CaracteristicaRepository;
use Illuminate\Http\Request;

class CaracteristicasController extends Controller
{
    protected $caracteristicasRepository;

    public function __construct(CaracteristicaRepository $caracteristicasRepository)
    {
        $this->caracteristicasRepository = $caracteristicasRepository;
    }

    public function index(Request $request)
    {
        $caracteristicas = $this->caracteristicasRepository->buscaTodasCaracteristicas();

        if ($request->ajax()) {
            $caracteristicas = $this->caracteristicasRepository->buscaCaracteristicaAjax($request->caracteristica);

            return view('admin.caracteristicas.load', compact('caracteristicas'))->render();
        }

        return view('admin.caracteristicas.index', compact('caracteristicas'));

    }

    public function create()
    {
        return view('admin.caracteristicas.create');
    }

    public function store(CaracteristicasCreateRequest $request)
    {
        $this->caracteristicasRepository->create($request->all());

        flash('Caracteristica inserida com sucesso.')->success();
        return redirect()->back();
    }

    public function show($id)
    {
        $caracteristica = $this->caracteristicasRepository->find($id);

        return view('admin.caracteristicas.show', compact('caracteristica'));
    }

    public function update(CaracteristicasUpdateRequest $request, $id)
    {
        $this->caracteristicasRepository->update($request->all(), $id);

        flash('Caracteristica atualizada com sucesso.')->success();
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        try {

            $removido = $this->caracteristicasRepository->delete($request->id);

            return response()->json($removido);
        } catch (\Exception $e) {

            echo $e->getMessage();

            exit;
        }
    }

}
