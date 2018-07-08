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

    public function buscaDificuldadesUsuariosAjax($dificuldade_usuario)
    {
        $resultado = $this->scopeQuery(function ($query) use($dificuldade_usuario) {
            return $query
                ->selectRaw("dificuldade_usuarios.id, caracteristicas.nome as caracteristica_nome, usuarios.nome as usuario_nome, peso")
                ->where("caracteristicas.nome", "LIKE", "%{$dificuldade_usuario}%")
                ->orWhere("usuarios.nome", "LIKE", "%{$dificuldade_usuario}%")
                ->orWhere("dificuldade_usuarios.peso", "LIKE", "%{$dificuldade_usuario}%")
                ->join('usuarios', 'dificuldade_usuarios.usuario_id', '=', 'usuarios.id')
                ->join('caracteristicas', 'dificuldade_usuarios.caracteristica_id', '=', 'caracteristicas.id');
        })->paginate(15);

        return $resultado;
    }

    public function buscaTodasDificuldadesUsuarios()
    {
        $resultado = $this->scopeQuery(function ($query) {
            return $query
                ->selectRaw("dificuldade_usuarios.id, caracteristicas.nome as caracteristica_nome, usuarios.nome as usuario_nome, peso")
                ->join('usuarios', 'dificuldade_usuarios.usuario_id', '=', 'usuarios.id')
                ->join('caracteristicas', 'dificuldade_usuarios.caracteristica_id', '=', 'caracteristicas.id');
        })->paginate(15);

        return $resultado;
    }
}
