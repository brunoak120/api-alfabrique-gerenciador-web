<?php

namespace App\Services;

use App\Models\PalavraVisitada;
use App\Repositories\DificuldadeUsuarioRepository;
use App\Repositories\PalavraRepository;
use App\Repositories\UsuarioRepository;

class PalavrasService
{
    protected $palavrasRepository;
    protected $usuariosRepository;
    protected $dificuldadeUsuarioRepository;
    protected $palavraVisitadaRepository;

    public function __construct(PalavraRepository $palavraRepository, UsuarioRepository $usuariosRepository,
                                DificuldadeUsuarioRepository $dificuldadeUsuarioRepository,
                                PalavraVisitada $palavraVisitadaRepository)
    {
        $this->palavrasRepository = $palavraRepository;
        $this->usuariosRepository = $usuariosRepository;
        $this->dificuldadeUsuarioRepository = $dificuldadeUsuarioRepository;
        $this->palavraVisitadaRepository = $palavraVisitadaRepository;
    }

    public function buscarPalavra()
    {
        $dificuldades = $this->dificuldadeUsuarioRepository->findWhere(['usuario_id' => auth()->user()->id]);
        $usuarioPontos = $this->usuariosRepository->findWhere(['id' => auth()->user()->id])->pluck('pontuacao')->first();
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

        $resposta = $this->verificaAcerto($palavra->nome, $request->palavra);

        $this->balancearPesos($resposta, $request->tempo, $palavra->nome, $request->palavra);

        $this->marcaVisitado($palavra->id);

        return $resposta;
    }

    private function verificaAcerto($palavra, $palavraRespondida)
    {
        if (strtolower($palavra) == strtolower($palavraRespondida)) {
            return true;
        } else {
            return false;
        }
    }

    private function verificaAcertoCaracteristica($posicoes, $palavra, $palavraRespondida) {
        $letras = str_split(strtolower($palavra));
        $letrasRespondidas = str_split(strtolower($palavraRespondida));

        foreach ($posicoes as $posicao){
            if ($letras[$posicao] != $letrasRespondidas[$posicao]) {
                return false;
            }
        }

        return true;
    }

    private function balancearPesos($acertou, $tempo, $palavra, $palavraRespondida)
    {
        $dificuldades = $this->dificuldadeUsuarioRepository->findWhere(['usuario_id' => auth()->user()->id]);

        foreach ($dificuldades as $dificuldade) {
            $posicoes = $this->retornaPosicoes($palavra, $dificuldade->caracteristica->nome);

            if ($this->verificaAcertoCaracteristica($posicoes, $palavra, $palavraRespondida)) { //ACERTOU AS CARACTERISTICAS
                $this->dificuldadeUsuarioRepository->update(['peso' => $dificuldade->peso - ConfigsService::pesoBalancearAcerto()], $dificuldade->id);
            } else { //ERROU AS CARACTERISTICAS
                $this->dificuldadeUsuarioRepository->update(['peso' => $dificuldade->peso + ConfigsService::pesoBalancearErro()], $dificuldade->id);
            }
        }
    }

    private function marcaVisitado($palavra_id)
    {
        $visita = ConfigsService::qntVisita();
        $this->palavraVisitadaRepository->updateOrCreate(['usuario_id' => auth()->user()->id, 'palavra_id' => $palavra_id], ['vezes_visitado' => $visita]);
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