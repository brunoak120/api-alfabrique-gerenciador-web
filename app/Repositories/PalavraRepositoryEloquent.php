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
        $sql = "SELECT nome FROM palavras WHERE (silabas * {}";
        foreach ($dificuldadesUsuarios as $dificuldadeUsuario)
        {
            
        }

        return $this->scopeQuery(function ($query) {
            return $query->orderBy('categoria');
        });
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
