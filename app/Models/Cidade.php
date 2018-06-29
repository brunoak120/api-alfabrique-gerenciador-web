<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Cidade.
 *
 * @package namespace App\Entities;
 */
class Cidade extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'estado_id',
        'nome'
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function enderecos()
    {
        return $this->hasMany(Endereco::class);
    }
}
