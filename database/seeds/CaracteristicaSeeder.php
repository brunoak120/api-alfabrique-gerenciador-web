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
                'nome' => 'ç',
                'descricao' => 'Palavras que possuem Ç',
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                'id' => 2,
                'nome' => 'á',
                'descricao' => 'Palavras que possuem acento agudo no a',
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
