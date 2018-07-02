<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Endereco.
 *
 * @package namespace App\Entities;
 */
class Endereco extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cidade_id',
        'cep',
        'bairro',
        'tipo_local',
        'logradouro',
        'numero',
        'complemento'
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class);
    }

}
