<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NivelAcessoTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
        $this->call(EnderecoTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
    }
}
