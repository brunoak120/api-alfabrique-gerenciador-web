<?php

namespace App\Services;

use App\Repositories\DificuldadeUsuarioRepository;
use App\Repositories\PalavraRepository;
use App\Repositories\UsuarioRepository;

class PalavrasService
{
    protected $palavrasRepository;
    protected $usuariosRepository;
    protected $dificuldadeUsuarioRepository;

    public function __construct(PalavraRepository $palavraRepository, UsuarioRepository $usuariosRepository,
                                DificuldadeUsuarioRepository $dificuldadeUsuarioRepository)
    {
        $this->palavrasRepository = $palavraRepository;
        $this->usuariosRepository = $usuariosRepository;
        $this->dificuldadeUsuarioRepository = $dificuldadeUsuarioRepository;
    }

    public function buscarPalavra()
    {
        $dificuldades = $this->dificuldadeUsuarioRepository->findWhere(['usuario_id' => 3]);
        $where = $this->retornaQuery($dificuldades);
        $palavra = $this->palavrasRepository->buscaPalavraCompativel($where);

        return $palavra;
    }

    public function retornaQuery($dificuldades)
    {
        $sql = "";

        foreach ($dificuldades as $index => $dificuldade) {
            if ($dificuldade->caracteristica->nome == 'Sílabas' AND $index < count($dificuldades) - 1) {
                $sql .= "silabas * {$dificuldade->peso} + ";
            } else if ($dificuldade->caracteristica->nome == 'Sílabas' AND $index == count($dificuldades) - 1){
                $sql .= "silabas * {$dificuldade->peso}";
            } else if ($index == count($dificuldades) - 1){
                $sql .= "ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), '{$dificuldade->caracteristica->nome}', ''))) / LENGTH('{$dificuldade->caracteristica->nome}')) * {$dificuldade->peso}";
            } else {
                $sql .= "ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), '{$dificuldade->caracteristica->nome}', ''))) / LENGTH('{$dificuldade->caracteristica->nome}')) * {$dificuldade->peso} + ";
            }
        }

        return $sql;
    }
}