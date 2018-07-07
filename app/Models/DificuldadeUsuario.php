<?php

namespace App\Models;

use App\Services\ConfigsService;
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
        'usuario_id',
        'caracteristica_id',
        'peso'
    ];

    public function caracteristica()
    {
        return $this->belongsTo(Caracteristica::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function setPesoAttribute($peso)
    {
        $pesoMinimo = ConfigsService::pesoMin();
        $pesoMaximo = ConfigsService::pesoMax();

        if ($pesoMinimo > $peso) {
            $this->attributes['peso'] = $pesoMinimo;
        } else if ($pesoMaximo < $peso) {
            $this->attributes['peso'] = $pesoMaximo;
        } else {
            $this->attributes['peso'] = $peso;
        }
    }

}
