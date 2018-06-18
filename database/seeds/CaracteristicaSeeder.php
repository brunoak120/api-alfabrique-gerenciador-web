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
                'nome' => 'Silabas',
                'caracteristica' => 'silabas',
                'descricao' => 'Quantidade de Silabas',
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                'id' => 2,
                'nome' => 'Letras',
                'caracteristica' => 'letras',
                'descricao' => 'Quantidade de Letras',
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
