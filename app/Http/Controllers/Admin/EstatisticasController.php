<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstatisticasController extends Controller
{

    protected $usuariosRepository;

    public function __construct(UsuarioRepository $usuarioRepository) {
        $this->usuariosRepository = $usuarioRepository;
    }

    public function index() {
        $usuarios = $this->usuariosRepository->retonaEstadosUsuarios()->all();

        $estatistica = $this->retornaDadosGraficoUsuariosEstados($usuarios);

        $chartjs = $this->criar_grafico($estatistica['labels'], $estatistica['data']);

        return view('admin.estatisticas.index', compact('chartjs'));
    }

    public function retornaDadosGraficoUsuariosEstados($usuarios) {
        $labels = [];
        $data = [];
        $estatistica = [];

        foreach ($usuarios as $usuario) {
            array_push($labels, $usuario->nome_estado);
            array_push($data, $usuario->quantidade_pessoas);
        }

        $estatistica['labels'] = $labels;
        $estatistica['data'] = $data;

        return $estatistica;
    }

    public function criar_grafico($labels, $data) {
        return app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels($labels)
            ->datasets([
                [
                    'backgroundColor' => ['#FF6384', '#36A2EB'],
                    'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                    'data' => $data
                ]
            ])
            ->options([]);
    }
}
