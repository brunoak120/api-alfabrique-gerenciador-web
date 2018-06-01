<?php

use Illuminate\Database\Seeder;

class PalavraAlimentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = date("Y-m-d H:i:s");

        DB::table('palavras')->insert([
            [
                'categoria_id' => 1,
                'nome' => 'Abacate',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Brocólis',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Chocolate',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Alho',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Espinafre',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Iogurte',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Atum',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Frutas ',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Castanha de Caju',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Gengibre',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Aveia',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Azeite',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Canela',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Limão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Ovos',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Cebola',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Cenouras',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Camarão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Queijo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Tomate',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Amêndoas',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Maçã',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Batata',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Leite',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Milho',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Azeitonas',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Coco',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Banana',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Peru',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Cogumelo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Biscoito',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Melão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Melancia',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Sardinha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Kiwi',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Frango',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Chá',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Abacaxi',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Acerola',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Amora',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Berinjela',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Caju',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Caqui',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Cereja',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Cacau',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Castanha do Pará',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Framboesa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Goiaba',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Jabuticaba',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Jaca',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Laranja',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Manga',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Mamão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Maracujá',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Mexerica',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Morango',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Pequi',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Pêssego',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Uva',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Açucar',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Pão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Bolo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Mel',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Ketchup',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Creme de Leite',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Café',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Batata Frita',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Pizza',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Sorvete',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Macarrão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Feijão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Arroz',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Peixe',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Porco',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Abóbora',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Ameixa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Bacalhau',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Bacon',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Carambola',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Couve',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Damasco',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Empada',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Ervilhas',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Farinha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Fígado',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Hamburger',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Pastel',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Pepino',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Pinhão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Polvo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Pudim',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Salame',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 1,
                'nome' => 'Tapioca',
                'created_at' => $now,
                'updated_at' => $now
            ],

        ]);
    }
}
