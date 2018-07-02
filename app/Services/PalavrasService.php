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
        $dificuldades = $this->dificuldadeUsuarioRepository->findWhere(['usuario_id' => config('constants.JOGADOR_ID_TESTE')]);
        $usuarioPontos = $this->usuariosRepository->findWhere(['id' => config('constants.JOGADOR_ID_TESTE')])->pluck('pontuacao')->get(0);
        $where = $this->retornaQuery($dificuldades);
        $palavra = $this->palavrasRepository->buscaPalavraCompativel($where, $usuarioPontos);

        return $palavra;
    }

    private function retornaQuery($dificuldades)
    {
        $sql = "";

        foreach ($dificuldades as $index => $dificuldade) {
            if ($dificuldade->caracteristica->nome == config('constants.PALAVRA_PADRAO') AND $index < count($dificuldades) - 1) {
                $sql .= "silabas * {$dificuldade->peso} + ";
            } else if ($dificuldade->caracteristica->nome == 'Sílabas' AND $index == count($dificuldades) - 1) {
                $sql .= "silabas * {$dificuldade->peso}";
            } else if ($index == count($dificuldades) - 1) {
                $sql .= "ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), '{$dificuldade->caracteristica->nome}', ''))) / LENGTH('{$dificuldade->caracteristica->nome}')) * {$dificuldade->peso}";
            } else {
                $sql .= "ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), '{$dificuldade->caracteristica->nome}', ''))) / LENGTH('{$dificuldade->caracteristica->nome}')) * {$dificuldade->peso} + ";
            }
        }

        return $sql;
    }

    public function avaliarReposta($request)
    {
        $palavra = $this->palavrasRepository->find($request->id_palavra);

        $resposta = $this->verificarAcerto($palavra->nome, $request->palavra);

        $this->balancearPesos($resposta, $request->tempo, $palavra->nome, $request->palavra);

        return $resposta;
    }

    private function verificarAcerto($palavra, $palavraRespondida)
    {
        if (strtolower($palavra) == strtolower($palavraRespondida)) {
            return true;
        } else {
            return false;
        }
    }

    private function balancearPesos($acertou, $tempo, $palavra, $palavraRespondida)
    {
        $dificuldades = $this->dificuldadeUsuarioRepository->findWhere(['usuario_id' => config('constants.JOGADOR_ID_TESTE')]);

        foreach ($dificuldades as $dificuldade) {
           $posicoes = $this->retornaPosicoes($palavra, $dificuldade->caracteristica->nome);
           //VERIFICAR SE AS POSICOES ESTAO COMPATIVEIS COM A PALAVRA RESPONDIDA E BALANCEAR COM O config('constants.PESO_BALANCEAR')
        }
    }

    private function retornaPosicoes($palavra, $caracteristica){
        $inicio = 0;
        $posicoes = [];
        $letras = str_split(strtolower($palavra));


        foreach ($letras as $index => $letra) {
            if ($letra == $caracteristica AND $caracteristica != config('constants.PALAVRA_PADRAO')) {
                $posicoes[$inicio] = $index;
                $inicio++;
            }
        }

        return $posicoes;
    }
}