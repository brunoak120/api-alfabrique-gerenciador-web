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
        $pesoRange = $pontuacao + config('constants.PESO_RANGE');
        $resultado = $this->scopeQuery(function ($query) use ($where, $pontuacao, $pesoRange) {
            return $query
                ->selectRaw("nome, {$where} AS peso")
                ->whereRaw("{$where} >= {$pontuacao} AND {$where} <= {$pesoRange}");
        })->first();

        return $resultado;
    }
    
}
