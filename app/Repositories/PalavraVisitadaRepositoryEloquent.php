<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PalavraVisitadaRepository;
use App\Models\PalavraVisitada;
use App\Validators\PalavraVisitadaValidator;

/**
 * Class PalavraVisitadaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PalavraVisitadaRepositoryEloquent extends BaseRepository implements PalavraVisitadaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PalavraVisitada::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
