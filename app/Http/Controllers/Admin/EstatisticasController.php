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

    public function jogadoresEstados() {
        $chartjs = $this->graficoPieEstatisticasService->retornaChartjsMediaJogadoresEstados();

        return view('admin.estatisticas.jogadores.estados', compact('chartjs'));
    }

    public function jogadoresRanking()
    {
        $chartjs = $this->graficoPieEstatisticasService->retornaChartjsMediaJogadoresRanking();

        return view('admin.estatisticas.jogadores.ranking', compact('chartjs'));
    }
}
