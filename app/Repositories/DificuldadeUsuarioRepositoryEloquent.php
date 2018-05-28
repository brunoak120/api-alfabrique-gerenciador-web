<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\DificuldadeUsuarioRepository;
use App\Models\DificuldadeUsuario;
use App\Validators\DificuldadeUsuarioValidator;

/**
 * Class DificuldadeUsuarioRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class DificuldadeUsuarioRepositoryEloquent extends BaseRepository implements DificuldadeUsuarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return DificuldadeUsuario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
