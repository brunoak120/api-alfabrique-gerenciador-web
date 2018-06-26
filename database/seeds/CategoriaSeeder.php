<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = date("Y-m-d H:i:s");

        DB::table('categorias')->insert([
            [
                'id' => 1,
                'nome' => 'Alimentos',
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                'id' => 2,
                'nome' => 'Animais',
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                'id' => 3,
                'nome' => 'Objetos',
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
