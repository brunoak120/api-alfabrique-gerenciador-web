<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CaracteristicaRepository;
use App\Entities\Caracteristica;
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
    
}
