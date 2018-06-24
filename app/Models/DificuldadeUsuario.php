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

    public function caracteristica()
    {
        return $this->belongsTo(Caracteristica::class);
    }

    public function dificuldade()
    {
        return $this->belongsTo(Dificuldade::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

}
