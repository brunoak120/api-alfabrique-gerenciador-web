<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CidadeRepository;
use App\Models\Cidade;
use App\Validators\CidadeValidator;

/**
 * Class CidadeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CidadeRepositoryEloquent extends BaseRepository implements CidadeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cidade::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function buscarCidade($dados)
    {
        $resultado = $this->scopeQuery(function ($query) use ($dados) {
            return $query->selectRaw('cidades.id')
                ->where("cidades.nome", "=", "{$dados['cidade']}")
                ->Where("estados.nome", "=", "{$dados['estado']}")
                ->join("estados", "cidades.estado_id", "=", "estados.id");
        })->first()->id;

        return $resultado;
    }
    
}
