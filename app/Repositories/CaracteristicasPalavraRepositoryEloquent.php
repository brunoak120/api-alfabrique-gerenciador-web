<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CaracteristicasPalavraRepository;
use App\Models\CaracteristicasPalavra;
use App\Validators\CaracteristicasPalavraValidator;

/**
 * Class CaracteristicasPalavraRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CaracteristicasPalavraRepositoryEloquent extends BaseRepository implements CaracteristicasPalavraRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CaracteristicasPalavra::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
