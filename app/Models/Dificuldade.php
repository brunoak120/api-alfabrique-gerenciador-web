<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Dificuldade.
 *
 * @package namespace App\Entities;
 */
class Dificuldade extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'peso'
    ];

    public function dificuldadeUsuario()
    {
        return $this->hasMany(DificuldadeUsuario::class);
    }

}
