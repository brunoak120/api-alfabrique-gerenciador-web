<?php

namespace App\Observers;

use App\Models\Caracteristica;
use App\Repositories\DificuldadeUsuarioRepository;
use App\Repositories\UsuarioRepository;

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
        $usuarios = $this->usuariosRepository->findWhere(['nivel_acesso_id' => 2]);

        foreach ($usuarios as $usuario) {
            $this->dificuldadesUsuariosRepository->create(['usuario_id' => $usuario->id, 'caracteristica_id' => $caracteristica->id, 'peso' => 30]);
        }
    }

    public function deleting(Caracteristica $caracteristica)
    {
        //
    }
}