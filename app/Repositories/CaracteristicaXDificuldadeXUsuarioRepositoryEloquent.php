<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CaracteristicaXDificuldadeXUsuarioRepository;
use App\Models\CaracteristicaXDificuldadeXUsuario;
use App\Validators\CaracteristicaXDificuldadeXUsuarioValidator;

/**
 * Class CaracteristicaXDificuldadeXUsuarioRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CaracteristicaXDificuldadeXUsuarioRepositoryEloquent extends BaseRepository implements CaracteristicaXDificuldadeXUsuarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CaracteristicaXDificuldadeXUsuario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
