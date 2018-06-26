<?php

use Illuminate\Database\Seeder;

class CaracteristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");

        DB::table('caracteristicas')->insert([
            [
                'id' => 1,
                'nome' => 'Sílaba',
                'descricao' => 'Dificuldade na característica de quantidade de sílabas na palavra.',
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                'id' => 2,
                'nome' => 'Letras',
                'descricao' => 'Dificuldade na característica de quantidade de letras na palavra.',
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                'id' => 3,
                'nome' => 'ç',
                'descricao' => 'Palavras que possuem Ç',
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                'id' => 4,
                'nome' => 'á',
                'descricao' => 'Palavras que possuem acento agudo no a',
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
