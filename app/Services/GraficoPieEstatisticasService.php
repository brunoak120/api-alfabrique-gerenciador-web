<?php

namespace App\Services;

use App\Repositories\UsuarioRepository;

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

    public function retornaChartjsMediaJogadoresRanking() {
        $usuarios = $this->retornaUsuariosRanking();
        $datasets = $this->montaDataSet($usuarios);

        return app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 400, 'height' => 200])
            ->datasets($datasets)
            ->options(['legend' => [
                'display' => true,
                'labels' => [
                    'fontColor' => '#000'
                ]
            ]]);

    }

    public function montaDataSet($usuarios) {
        $datasets = [];

        foreach ($usuarios as $index => $usuario) {
            $rgba = $this->montaRGBA($index);

            $temp = [
                "label" => "{$usuario['nome']}",
                'backgroundColor' => [$rgba],
                'data' => [$usuario['pontuacao']]
            ];

            array_push($datasets, $temp);
        }

        return $datasets;

    }

    public function montaRGBA($num) {
        $hash = md5('color' . $num); // modify 'color' to get a different palette

        return 'rgba(' . hexdec(substr($hash, 0, 2))
                        . ', ' . hexdec(substr($hash, 2, 2))
                        . ', ' . hexdec(substr($hash, 4, 2)) . ')';
    }

    public function retornaUsuariosRanking() {
        return $this->usuariosRepository->retonaRankingUsuarios()->all();
    }

    public function retornaDadosGraficoUsuariosEstados() {
        $usuarios = $this->usuariosRepository->retonaEstadosUsuarios()->all();

        $estatisticas['labels'] = $usuarios->pluck('nome_estado')->toArray();
        $estatisticas['data'] = $usuarios->pluck('quantidade_pessoas')->toArray();

        return $estatisticas;
    }

}