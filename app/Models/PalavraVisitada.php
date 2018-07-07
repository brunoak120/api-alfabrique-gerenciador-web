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

    protected $table = 'palavras_visitadas';
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

    public function setVezesVisitadoAttribute($vezes_visitado)
    {
        if (isset($this->attributes['vezes_visitado'])){
            $this->attributes['vezes_visitado'] += $vezes_visitado;
        }
    }

}
