<?php

use Illuminate\Database\Seeder;
use App\Models\NivelAcesso;

class NivelAcessoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NivelAcesso::create([
            'id' => '1',
            'nome'     => 'Administrador',
        ]);
    }
}
