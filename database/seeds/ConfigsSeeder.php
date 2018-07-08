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
                'descricao' => 'Responsável por adicionar o peso inicial que todo jogador novo terá.',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 2,
                'nome' => 'pesoMin',
                'valor' => 30,
                'descricao' => 'Dificuldade mínima que um jogador poderá chegar.',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 3,
                'nome' => 'pesoMax',
                'valor' => 999999999,
                'descricao' => 'Dificuldade Máxima que um jogador poderá chegar.',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 4,
                'nome' => 'pesoRange',
                'valor' => 15,
                'descricao' => 'Define o intervalo de dificuldade que será buscado. Caso no jogador estiver com peso 30 será buscado palavras de peso 30 à 30 + esse valor.',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 5,
                'nome' => 'pesoBalancearErro',
                'valor' => 15,
                'descricao' => 'Valor que será adicionado das características onde ocorreu o erro, ou seja, a característica será mais difícil.',
                'created_at' => $now,
                'updated_at' => $now,
            ],[
                'id' => 6,
                'nome' => 'pesoBalancearAcerto',
                'valor' => 15,
                'descricao' => 'Valor que será removido nas características onde o jogador acertou, ou seja, a característica será mais fácil.',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 7,
                'nome' => 'jogadorNivelAcesso',
                'valor' => 2,
                'descricao' => 'Define o ID do nível de acesso do jogador.',
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'id' => 8,
                'nome' => 'qntVisita',
                'valor' => 1,
                'descricao' => 'Define a quantidade de visita que será contada a cada resposta enviada.',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
