<?php

namespace App\Services;

use App\Repositories\ConfigRepository;

class ConfigsService
{

    public static function pesoInicial()
    {
        $configRepository = app()->make(\App\Repositories\ConfigRepository::class);
        $valor = $configRepository->find(config('constants.PESO_INICIAL'), ['valor']);

        return $valor->valor;
    }

    public static function pesoMin()
    {
        $configRepository = app()->make(\App\Repositories\ConfigRepository::class);
        $valor = $configRepository->find(config('constants.PESO_MIN'), ['valor']);

        return $valor->valor;
    }

    public static function pesoMax()
    {
        $configRepository = app()->make(\App\Repositories\ConfigRepository::class);
        $valor = $configRepository->find(config('constants.PESO_MAX'), ['valor']);

        return $valor->valor;
    }

    public static function pesoRange()
    {
        $configRepository = app()->make(\App\Repositories\ConfigRepository::class);
        $valor = $configRepository->find(config('constants.PESO_RANGE'), ['valor']);

        return $valor->valor;
    }

    public static function pesoBalancearErro()
    {
        $configRepository = app()->make(\App\Repositories\ConfigRepository::class);
        $valor = $configRepository->find(config('constants.PESO_BALANCEAR_ERRO'), ['valor']);

        return $valor->valor;
    }

    public static function pesoBalancearAcerto()
    {
        $configRepository = app()->make(\App\Repositories\ConfigRepository::class);
        $valor = $configRepository->find(config('constants.PESO_BALANCEAR_ACERTO'), ['valor']);

        return $valor->valor;
    }

    public static function jogadorNivelAcesso()
    {
        $configRepository = app()->make(\App\Repositories\ConfigRepository::class);
        $valor = $configRepository->find(config('constants.JOGADOR_NIVEL_ACESSO'), ['valor']);

        return $valor->valor;
    }

    public static function qntVisita()
    {
        $configRepository = app()->make(\App\Repositories\ConfigRepository::class);
        $valor = $configRepository->find(config('constants.QNT_VISITA'), ['valor']);

        return $valor->valor;
    }
}