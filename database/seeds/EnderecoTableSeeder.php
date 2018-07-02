<?php

use Illuminate\Database\Seeder;
use App\Models\Endereco;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            [
                'id' => '1',
                'cidade_id' => '2701506',
                'cep' => '79021040',
                'bairro' => 'Santa Fé',
                'tipo_local' => 'Casa',
                'logradouro' => 'R. Eduardo Santos Pereira',
                'numero' => '2647',
                'complemento' => 'S/C'
            ], [
                'id' => '2',
                'cidade_id' => '2701506',
                'cep' => '79021040',
                'bairro' => 'Santa Fé',
                'tipo_local' => 'Casa',
                'logradouro' => 'R. Eduardo Santos Pereira',
                'numero' => '2647',
                'complemento' => 'S/C'
            ]
        ]);
    }
}
