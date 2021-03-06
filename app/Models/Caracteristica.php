<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Caracteristica.
 *
 * @package namespace App\Entities;
 */
class Caracteristica extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'caracteristica',
        'descricao'
    ];

    public function dificuldadeUsuario()
    {
        return $this->hasMany(DificuldadeUsuario::class);
    }

}
