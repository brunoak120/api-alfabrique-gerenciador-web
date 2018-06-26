<?php

namespace App\Observers;

use App\Models\Caracteristica;
use App\Repositories\DificuldadeUsuarioRepository;
use App\Repositories\UsuarioRepository;
use Illuminate\Support\Facades\Config;

class CaracteristicasObserver
{
    protected $usuariosRepository;
    protected $dificuldadesUsuariosRepository;

    public function __construct(UsuarioRepository $usuarioRepository, DificuldadeUsuarioRepository $dificuldadeUsuarioRepository)
    {
        $this->usuariosRepository = $usuarioRepository;
        $this->dificuldadesUsuariosRepository = $dificuldadeUsuarioRepository;
    }

    public function created(Caracteristica $caracteristica)
    {
        $usuarios = $this->usuariosRepository->findWhere(['nivel_acesso_id' => Config::get('constants.JOGADOR_ID')]);

        foreach ($usuarios as $usuario) {
            $this->dificuldadesUsuariosRepository->create(['usuario_id' => $usuario->id, 'caracteristica_id' => $caracteristica->id, 'peso' => Config::get('constants.PESO_INICIAL')]);
        }
    }

}