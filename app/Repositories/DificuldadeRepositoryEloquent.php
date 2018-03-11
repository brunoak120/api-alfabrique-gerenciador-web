<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\DificuldadeRepository;
use App\Entities\Dificuldade;
use App\Validators\DificuldadeValidator;

/**
 * Class DificuldadeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class DificuldadeRepositoryEloquent extends BaseRepository implements DificuldadeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Dificuldade::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
