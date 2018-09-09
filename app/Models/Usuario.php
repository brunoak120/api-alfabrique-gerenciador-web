<?php

namespace App\Models;

use App\Services\ConfigsService;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Usuario.
 *
 * @package namespace App\Entities;
 */
class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nivel_acesso_id',
        'endereco_id',
        'nome',
        'email',
        'password',
        'pontuacao'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function dificuldadeUsuario()
    {
        return $this->hasMany(DificuldadeUsuario::class);
    }

    public function nivelAcesso()
    {
        return $this->belongsTo(NivelAcesso::class);
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }

    public function palavraVisitada()
    {
        return $this->hasMany(PalavraVisitada::class);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function setPontuacaoAttribute($pontuacao)
    {
        $pesoMinimo = ConfigsService::pesoMin();
        $pesoMaximo = ConfigsService::pesoMax();

        if ($pesoMinimo > $pontuacao) {
            $this->attributes['pontuacao'] = $pesoMinimo;
        } else if ($pesoMaximo < $pontuacao) {
            $this->attributes['pontuacao'] = $pesoMaximo;
        } else {
            $this->attributes['pontuacao'] = $pontuacao;
        }
    }

}
