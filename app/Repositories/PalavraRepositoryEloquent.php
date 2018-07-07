<?php

namespace App\Repositories;

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

    public function buscaPalavraCompativel($where, $pontuacao)
    {
        $jogador_id = config('constants.JOGADOR_ID_TESTE');
        $pesoRange = $pontuacao + config('constants.PESO_RANGE');

        $resultado = $this->scopeQuery(function ($query) use ($where, $pontuacao, $pesoRange, $jogador_id) {
            return $query
                ->selectRaw("nome, imagem, {$where} AS peso")
                ->whereRaw("{$where} >= {$pontuacao} AND {$where} <= {$pesoRange}")
                ->whereRaw("palavras_visitadas.usuario_id = {$jogador_id} OR (SELECT COUNT(*) FROM palavras_visitadas WHERE usuario_id = {$jogador_id} AND palavra_id = palavras_visitadas.palavra_id) > 0")
                ->leftjoin("palavras_visitadas", "palavras.id", "=", "palavras_visitadas.palavra_id")
                ->orderby("palavras_visitadas.vezes_visitado", "asc");
        })->all();

        return $resultado;
    }
    
}
