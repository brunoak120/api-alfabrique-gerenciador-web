<?php

use Illuminate\Database\Seeder;

class PalavraObjetosSeeder extends Seeder
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
                'categoria_id' => 3,
                'nome' => 'Agulha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Alfinete',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Anel',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Anzol',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Andador',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Apontador',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Almofada',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Abajour',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Bola',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Balão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Botas',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Bexiga',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Borracha Escolar',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'CD',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Colher',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Caneta',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Camisa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Camiseta',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Calça',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Castiçal',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Copo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Carimbo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Dado',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Dedal',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Dicionário',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Diário',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'DVD',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Dentadura',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Escada',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Escova',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Espelho',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Espada',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Esmalte',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Faca',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Facão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Folha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Furadeira',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Ferradura',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Funil',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Farol',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Gaiola',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Garfo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Gargantilha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Garrafa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Gaveta',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Guitarra',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Gaita',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Gravata',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Gorro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Harpa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Hélice',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Holofote',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Isqueiro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Imã',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Isopor',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Isca',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Inalador',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Incenso',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Jarra',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Jóias',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Jaqueta',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Janela',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Lápis',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Luvas',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Lampada',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Luminária',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Leque',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Lenço',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Livro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Lanterna',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Lixeira',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Lapiseira',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Lata',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Mola',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Maquiagem',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Meias',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Mala',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Mochila',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Navalha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Novelo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Navio de Brinquedo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Óculos',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Obras de Arte',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Óculos de Sol',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Panela',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Pedra',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Papel',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Porta-Retrato',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Pen Drive',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Prato',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Pulseira',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Queijeira',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Quebra Cabeça',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Quadro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Régua',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Ratoeira',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Roleta',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Relógio',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Remo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Roteador',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Rímel',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Revista',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Sandália',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Sapato',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Saleiro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Sino',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Saco',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Sacola',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Saco de pancadas',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Sabonete',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Shorts',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Tesoura',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Teclado',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Telefone',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Tampa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Termômetro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Trena',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Telha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Tatame',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Tamanco',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Urna',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Ursinho de pelúcia',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Uniforme',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Umidificador de Ar',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Vassoura',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Ventilador',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Vara de pescar',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Varal',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Vaso',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Vidro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Viseira',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Vela',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Xicara',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Xadrez',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Xale',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Xarope',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Zíper',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 3,
                'nome' => 'Zarabatana',
                'created_at' => $now,
                'updated_at' => $now
            ],

        ]);
    }
}
