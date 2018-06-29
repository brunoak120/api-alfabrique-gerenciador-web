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
                'nome' => 'Sílabas',
                'descricao' => 'Dificuldade na característica de quantidade de sílabas na palavra.',
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
