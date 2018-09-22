<?php

namespace App\Repositories;

use App\Services\ConfigsService;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PalavraRepository;
use App\Models\Palavra;

/**
 * Class PalavraRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PalavraRepositoryEloquent extends BaseRepository implements PalavraRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Palavra::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function buscaPalavraNaoVisitada($where, $pontuacao)
    {
        $jogador_id = auth()->user()->id;
        $pesoRange = $pontuacao + ConfigsService::pesoRange();

        $resultado = $this->scopeQuery(function ($query) use ($where, $pontuacao, $pesoRange, $jogador_id) {
            return $query
                ->selectRaw("palavras.id, palavras.nome, imagem, {$where} AS peso, categorias.nome as categoria")
                ->whereRaw("palavras_visitadas.palavra_id IS NULL")
                ->whereRaw("{$where} >= {$pontuacao} AND {$where} <= {$pesoRange}")
                ->join("categorias", "palavras.categoria_id", "=", "categorias.id")
                ->leftJoin("palavras_visitadas", "palavras.id", "=", "palavras_visitadas.palavra_id");
        })->first();

        return $resultado;
    }

    public function buscaPalavraVisitada($where, $pontuacao)
    {
        $jogador_id = auth()->user()->id;
        $pesoRange = $pontuacao + ConfigsService::pesoRange();

        $resultado = $this->scopeQuery(function ($query) use ($where, $pontuacao, $pesoRange, $jogador_id) {
            return $query
                ->selectRaw("palavras.id, palavras.nome, imagem, {$where} AS peso, categorias.nome as categoria")
                ->whereRaw("palavras_visitadas.palavra_id IS NOT NULL")
                //->whereRaw("(palavras_visitadas.palavra_id NOT IN (SELECT palavra_id FROM palavras_visitadas WHERE usuario_id = {$jogador_id}))")
                ->whereRaw("{$where} >= {$pontuacao} AND {$where} <= {$pesoRange}")
                ->join("categorias", "palavras.categoria_id", "=", "categorias.id")
                ->rightJoin("palavras_visitadas", "palavras.id", "=", "palavras_visitadas.palavra_id")
                ->orderby("palavras_visitadas.vezes_visitado", "asc");
        })->first();

        return $resultado;
    }

    public function buscaPalavraDesafio($where, $pontuacao)
    {
        $jogador_id = auth()->user()->id;
        $pesoRange = $pontuacao + ConfigsService::pesoRange();

        $resultado = $this->scopeQuery(function ($query) use ($where, $pontuacao, $pesoRange, $jogador_id) {
            return $query
                ->selectRaw("palavras.id, palavras.nome, imagem, {$where} AS peso, categorias.nome as categoria")
                ->whereRaw("palavras_visitadas.palavra_id IS NULL")
                ->join("categorias", "palavras.categoria_id", "=", "categorias.id")
                ->leftJoin("palavras_visitadas", "palavras.id", "=", "palavras_visitadas.palavra_id")
                ->inRandomOrder();
        })->first();

        return $resultado;
    }

    public function buscaPalavraAjax($palavra)
    {
        $resultado = $this->scopeQuery(function ($query) use($palavra) {
            return $query
                ->selectRaw("palavras.id, palavras.nome, categorias.nome as categoria_nome")
                ->where("palavras.nome", "LIKE", "%{$palavra}%")
                ->orWhere("categorias.nome", "LIKE", "%{$palavra}%")
                ->join("categorias", "palavras.categoria_id", "=", "categorias.id");
        })->paginate(15);

        return $resultado;
    }

    public function buscaTodasPalavras()
    {
        $resultado = $this->scopeQuery(function ($query) {
            return $query
                ->selectRaw("palavras.id, palavras.nome, categorias.nome as categoria_nome")
                ->join("categorias", "palavras.categoria_id", "=", "categorias.id");
        })->paginate(15);

        return $resultado;
    }
    
}
