<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\NivelAcessoRepository;
use App\Models\NivelAcesso;
use App\Validators\NivelAcessoValidator;

/**
 * Class NivelAcessoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class NivelAcessoRepositoryEloquent extends BaseRepository implements NivelAcessoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return NivelAcesso::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
