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
        DB::table('nivel_acessos')->insert([
            [
                'id' => '1',
                'nome' => 'Administrador',
            ], [
                'id' => '2',
                'nome' => 'Jogador',
            ]
        ]);
    }
}
