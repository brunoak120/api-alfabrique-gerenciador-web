<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\NivelAcessoRepository::class, \App\Repositories\NivelAcessoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CategoriaRepository::class, \App\Repositories\CategoriaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\DificuldadeRepository::class, \App\Repositories\DificuldadeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CaracteristicaRepository::class, \App\Repositories\CaracteristicaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EstadoRepository::class, \App\Repositories\EstadoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CidadeRepository::class, \App\Repositories\CidadeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EnderecoRepository::class, \App\Repositories\EnderecoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UsuarioRepository::class, \App\Repositories\UsuarioRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PalavraRepository::class, \App\Repositories\PalavraRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\DificuldadeUsuarioRepository::class, \App\Repositories\DificuldadeUsuarioRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CaracteristicasPalavraRepository::class, \App\Repositories\CaracteristicasPalavraRepositoryEloquent::class);
        //:end-bindings:
    }
}
