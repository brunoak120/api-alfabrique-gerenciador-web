<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UsuarioRepository;
use App\Models\Usuario;
use App\Validators\UsuarioValidator;

/**
 * Class UsuarioRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UsuarioRepositoryEloquent extends BaseRepository implements UsuarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Usuario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function retonaEstadosUsuarios()
    {
        $admin = config('constants.ADMIN');

        $resultado = $this->scopeQuery(function ($query) use ($admin) {
            return $query
                ->selectRaw("estados.nome as nome_estado, COUNT(usuarios.id) as quantidade_pessoas")
                ->whereRaw("usuarios.nivel_acesso_id <> {$admin}")
                ->join("enderecos", "usuarios.endereco_id", "=", "enderecos.id")
                ->join("cidades", "enderecos.cidade_id", "=", "cidades.id")
                ->join("estados", "cidades.estado_id", "=", "estados.id")
                ->groupBy("estados.nome");
        });

        return $resultado;
    }

    public function retonaRankingUsuarios()
    {
        $admin = config('constants.ADMIN');

        $resultado = $this->scopeQuery(function ($query) use ($admin) {
            return $query
                ->selectRaw("usuarios.nome, pontuacao")
                ->whereRaw("nivel_acesso_id <> {$admin}")
                ->orderBy("pontuacao", "desc")
                ->orderBy("nome", "asc")
                ->limit(10);
        });

        return $resultado;
    }
    
}
