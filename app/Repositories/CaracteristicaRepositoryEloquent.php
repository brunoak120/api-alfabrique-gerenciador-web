<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CaracteristicaRepository;
use App\Models\Caracteristica;
use App\Validators\CaracteristicaValidator;

/**
 * Class CaracteristicaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CaracteristicaRepositoryEloquent extends BaseRepository implements CaracteristicaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Caracteristica::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function buscaCaracteristicaAjax($caracteristica)
    {
        $resultado = $this->scopeQuery(function ($query) use($caracteristica) {
            return $query
                ->selectRaw("id, nome")
                ->where("caracteristicas.nome", "LIKE", "%{$caracteristica}%")
                ->orWhere("caracteristicas.id", "LIKE", "%{$caracteristica}%");
        })->paginate(15);

        return $resultado;
    }

    public function buscaTodasCaracteristicas()
    {
        $resultado = $this->scopeQuery(function ($query) {
            return $query
                ->selectRaw("id, nome");
        })->paginate(15);

        return $resultado;
    }
}
