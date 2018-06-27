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

    public function buscaPalavraCompativel($dificuldadesUsuarios)
    {
        
        $resultado = $this->scopeQuery(function ($query) {
            return $query
                ->selectRaw('nome',
                    "ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'a', ''))) / LENGTH('a')) AS a",
                    "ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'io', ''))) / LENGTH('io')) AS oi",
                    "ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'a', ''))) / LENGTH('a')) + ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'io', ''))) / LENGTH('io')) AS soma",
                    "((5 * 25 + 15 * 29 + ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'a', ''))) / LENGTH('a')) * 10 + ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'io', ''))) / LENGTH('io')) * 12) / (5 + 15 + ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'a', ''))) / LENGTH('a')) + ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'io', ''))) / LENGTH('io')))) AS peso")
                ->whereRaw("((5 * 25 + 15 * 29 + ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'a', ''))) / LENGTH('a')) * 10 + ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'io', ''))) / LENGTH('io')) * 12) / (5 + 15 + ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'a', ''))) / LENGTH('a')) + ROUND((LENGTH(LOWER(nome)) - LENGTH(REPLACE(LOWER(nome), 'io', ''))) / LENGTH('io'))))", '<=', 30);
        });
        dd($resultado);
        return $resultado;
    }

    public function retornaConcat($caracteristica)
    {
        return "ROUND (   
                    (
                        LENGTH(lower(nome))
                        - LENGTH( REPLACE (lower(nome), '{$caracteristica}', '') ) 
                    ) / LENGTH('{$caracteristica}')        
                )";
    }
    
}
