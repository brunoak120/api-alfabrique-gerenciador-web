<?php

namespace App\Services;

use App\Repositories\CaracteristicaRepository;
use App\Repositories\CidadeRepository;
use App\Repositories\DificuldadeUsuarioRepository;
use App\Repositories\EnderecoRepository;
use App\Repositories\UsuarioRepository;

class UsuariosService
{
    protected $usuariosRepository;
    protected $enderecosRepository;
    protected $cidadeRepository;
    protected $caracteristicasRepository;
    protected $dificuldadeUsuarioRepository;

    public function __construct(UsuarioRepository $usuariosRepository,
                                EnderecoRepository $enderecosRepository,
                                CidadeRepository $cidadeRepository,
                                CaracteristicaRepository $caracteristicasRepository,
                                DificuldadeUsuarioRepository $dificuldadeUsuarioRepository)
    {

        $this->usuariosRepository = $usuariosRepository;
        $this->enderecosRepository = $enderecosRepository;
        $this->cidadeRepository = $cidadeRepository;
        $this->caracteristicasRepository = $caracteristicasRepository;
        $this->dificuldadeUsuarioRepository = $dificuldadeUsuarioRepository;
    }

    public function adicionaUsuario($request)
    {
        $cidade_id = $this->cidadeRepository->buscarCidade(['cidade' => $request['cidade'], 'estado' => $request['estado']]);
        $endereco = $this->enderecosRepository->create(['cidade_id' => $cidade_id, 'bairro' => $request['bairro'], 'logradouro' => $request['logradouro']]);
        $usuario = $this->usuariosRepository->create(['endereco_id' => $endereco->id, 'nome' => $request['nome'], 'email' => $request['email'], 'password' => $request['senha']]);

        $this->preparaDificuldadeInicialUsuario($usuario->id);

        return $usuario;
    }

    public function preparaDificuldadeInicialUsuario($id)
    {
        $caracteristicas = $this->caracteristicasRepository->all();

        foreach ($caracteristicas as $caracteristica) {
            $this->dificuldadeUsuarioRepository->create(['usuario_id' => $id, 'caracteristica_id' => $caracteristica->id, 'peso' => ConfigsService::pesoInicial()]);
        }
    }

    public function atualizaUsuario($request, $id)
    {
        $usuario = $this->usuariosRepository->find($id);
        $this->enderecosRepository->updateOrCreate(['id' => $usuario->endereco_id],[
            'cidade_id' => $request->cidade, 'logradouro' => $request->rua,
            'bairro' => $request->bairro, 'tipo_local' => $request->tipo_local, 'complemento' => $request->complemento]);
        $this->usuariosRepository->updateOrCreate(['id' => $id], ['nome' => $request->nome, 'email' => $request->email]);
    }


}