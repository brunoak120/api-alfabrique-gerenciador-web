<?php

use Illuminate\Database\Seeder;

class ConfigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = date("Y-m-d H:i:s");

        DB::table('configs')->insert([
            [
                'id' => 1,
                'nome' => 'pesoInicial',
                'valor' => 30,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 2,
                'nome' => 'pesoMin',
                'valor' => 30,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 3,
                'nome' => 'pesoMax',
                'valor' => 999999999,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 4,
                'nome' => 'pesoRange',
                'valor' => 15,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 5,
                'nome' => 'pesoBalancearErro',
                'valor' => 15,
                'created_at' => $now,
                'updated_at' => $now,
            ],[
                'id' => 6,
                'nome' => 'pesoBalancearAcerto',
                'valor' => 15,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 7,
                'nome' => 'jogadorAcesso',
                'valor' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 8,
                'nome' => 'qntVisita',
                'valor' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
