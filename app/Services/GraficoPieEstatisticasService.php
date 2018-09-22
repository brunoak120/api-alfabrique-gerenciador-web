<?php

namespace App\Services;

use App\Repositories\ConfigRepository;
use App\Repositories\UsuarioRepository;
use Illuminate\Database\Eloquent\Collection;

class GraficoPieEstatisticasService {

    protected $usuariosRepository;

    public function __construct(UsuarioRepository $usuarioRepository) {
        $this->usuariosRepository = $usuarioRepository;
    }

    public function retornaChartjsMediaJogadoresEstados() {
        $estatisticas = $this->retornaDadosGraficoUsuariosEstados();

        return app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels($estatisticas['labels'])
            ->datasets([
                [
                    'backgroundColor' => ['#FF6384', '#36A2EB'],
                    'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                    'data' => $estatisticas['data']
                ]
            ])
            ->options([]);
    }

    public function retornaDadosGraficoUsuariosEstados() {
        $usuarios = $this->usuariosRepository->retonaEstadosUsuarios()->all();

        $estatisticas['labels'] = $usuarios->pluck('nome_estado')->toArray();
        $estatisticas['data'] = $usuarios->pluck('quantidade_pessoas')->toArray();

        return $estatisticas;
    }

}