<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CategoriaRepository;
use App\Models\Categoria;
use App\Validators\CategoriaValidator;

/**
 * Class CategoriaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CategoriaRepositoryEloquent extends BaseRepository implements CategoriaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Categoria::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function buscaCategoriasAjax($categoria)
    {
        $resultado = $this->scopeQuery(function ($query) use($categoria) {
            return $query
                ->selectRaw("id, nome")
                ->where("categorias.nome", "LIKE", "%{$categoria}%")
                ->orWhere("categorias.id", "LIKE", "%{$categoria}%");
        })->paginate(15);

        return $resultado;
    }

    public function buscaTodasCategorias()
    {
        $resultado = $this->scopeQuery(function ($query) {
            return $query
                ->selectRaw("id, nome");
        })->paginate(15);

        return $resultado;
    }
    
}
