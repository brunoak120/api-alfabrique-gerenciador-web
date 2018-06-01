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
        Endereco::create([
            'id' => '1',
            'cidade_id'     => '2701506',
            'bairro'            => 'Santa Fé',
            'tipo_local'           => 'Casa',
            'logradouro'           => 'R. Eduardo Santos Pereira',
            'numero'           => '2647',
            'complemento'           => 'S/C'
        ]);
    }
}
