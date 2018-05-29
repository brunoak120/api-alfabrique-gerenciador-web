<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class DificuldadeUsuario.
 *
 * @package namespace App\Entities;
 */
class DificuldadeUsuario extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'caracteristica_id',
        'dificuldade_id',
        'usuario_id'
    ];

}
