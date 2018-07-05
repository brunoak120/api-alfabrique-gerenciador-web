<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class PalavraVisitada.
 *
 * @package namespace App\Models;
 */
class PalavraVisitada extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_id',
        'palavra_id',
        'vezes_visitado'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function palavra()
    {
        return $this->belongsTo(Palavra::class);
    }

    public function setVezesVisitadoAttribute()
    {
        $this->attributes['vezes_visitado'] += 1;
    }

}
