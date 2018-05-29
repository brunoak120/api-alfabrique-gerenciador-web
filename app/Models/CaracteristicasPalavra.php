<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class CaracteristicasPalavra.
 *
 * @package namespace App\Entities;
 */
class CaracteristicasPalavra extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'palavra_id',
        'caracteristica_id'
    ];

}
