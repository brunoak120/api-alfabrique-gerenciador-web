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
        $this->call(ConfigsSeeder::class);
        $this->call(NivelAcessoTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
        $this->call(EnderecoTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(PalavraAlimentosSeeder::class);
        $this->call(PalavraAnimaisSeeder::class);
        $this->call(PalavraObjetosSeeder::class);
        $this->call(CaracteristicaSeeder::class);
    }
}
