<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Palavra.
 *
 * @package namespace App\Entities;
 */
class Palavra extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categoria_id',
        'nome',
        'imagem'
    ];


    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
