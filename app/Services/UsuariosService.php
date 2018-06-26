<?php

namespace App\Services;

use App\Repositories\CaracteristicaRepository;
use App\Repositories\DificuldadeUsuarioRepository;
use App\Repositories\EnderecoRepository;
use App\Repositories\UsuarioRepository;

class UsuariosService
{
    protected $usuariosRepository;
    protected $enderecosRepository;
    protected $caracteristicasRepository;
    protected $dificuldadeUsuarioRepository;

    public function __construct(UsuarioRepository $usuariosRepository,
                                EnderecoRepository $enderecosRepository,
                                CaracteristicaRepository $caracteristicasRepository,
                                DificuldadeUsuarioRepository $dificuldadeUsuarioRepository)
    {

        $this->usuariosRepository = $usuariosRepository;
        $this->enderecosRepository = $enderecosRepository;
        $this->caracteristicasRepository = $caracteristicasRepository;
        $this->dificuldadeUsuarioRepository = $dificuldadeUsuarioRepository;
    }

    public function adicionaUsuario($request)
    {
        $usuario = $this->usuariosRepository->create($request);

        $this->preparaDificuldadeInicialUsuario($usuario->id);

        return $usuario;
    }

    public function preparaDificuldadeInicialUsuario($id)
    {
        $caracteristicas = $this->caracteristicasRepository->all();

        foreach ($caracteristicas as $caracteristica) {
            $this->dificuldadeUsuarioRepository->create(['usuario_id' => $id, 'caracteristica_id' => $caracteristica->id, 'peso' => PESO_INICIAL]);
        }
    }
}