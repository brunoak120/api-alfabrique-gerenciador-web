<?php

namespace App\Http\Controllers\Admin;

use App\Services\GraficoPieEstatisticasService;
use App\Http\Controllers\Controller;

class EstatisticasController extends Controller
{

    protected $graficoPieEstatisticasService;

    public function __construct(GraficoPieEstatisticasService $graficoPieEstatisticasService) {
        $this->graficoPieEstatisticasService = $graficoPieEstatisticasService;
    }

    public function index() {
        $chartjs = $this->graficoPieEstatisticasService->retornaChartjsMediaJogadoresEstados();

        return view('admin.estatisticas.index', compact('chartjs'));
    }
}
