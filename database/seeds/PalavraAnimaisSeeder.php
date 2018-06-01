<?php

use Illuminate\Database\Seeder;

class PalavraAnimaisSeeder extends Seeder
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
                'categoria_id' => 2,
                'nome' => 'Abelha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Ácaro da Sarna',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Águia chilena',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Águia cinzenta',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Águia dourada',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Albatroz',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Alce',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Anta',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Antrax (bacilo do)',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Aranha caranguejeira',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Aranha marrom',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Araponga',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Arara vermelha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Aratu',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Asno',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Avestruz',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Bacilo do tifo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Baleia azul',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Barata',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Beija-flor',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Bem-te-vi',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Bicho-da-seda',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Bicho-preguiça',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Borboleta',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Búfalo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Bugio preto',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cabra',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cágado',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Calango',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Camaleão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Camelo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Capivara',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Caranguejo uça',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cardeal',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Carneiro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Carpa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Carrapato',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cascavel',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Castor',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cavalo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Chacal',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Chimpanzé',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Chupim',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cigarra',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cisne',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Civeta',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Coala',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cobaia',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Cobra-cega',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Coelho',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Condor',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Corvina',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Corvo (americano)',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Crocodilo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Curimbatá',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Dourado',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Dragão de comodo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Elefante',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Ema',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Esquilo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Foca',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Gafanhoto',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Galinha d\'Angola',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Galinha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Gambá',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Ganso',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Garoupa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Gato',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Gato-do-mato',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Gavião',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Gavião-quiriquiqui',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Girafa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Golfinho',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Gorila',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Gralha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Guará (ave)',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Guará (lobo)',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Hamster',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Hipopótamo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Homem',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Jaburu',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Jabuti',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Jacaré',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Jacutinga',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Jaguatirica',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Jararaca',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'João-de-Barro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Jobóia',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lagartixa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lagarto',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lambari',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Leão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lebre (tapiti)',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Leopardo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lhama',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Libellula',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lince',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lobo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lombriga',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lontra',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Lula',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Mão-pelada',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Marreco',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Mico-amarelo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Mico-leão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Mico-preto',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Mico-ruivo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Mosquito da Dengue',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Namorado (peixe)',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Onça',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Orangotango',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Ostra japonesa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Ostra',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Paca',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pacu',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Panda Gigante (urso)',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Papagaio',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pato',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pavão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Peixe-espada',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Peru',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pica-pau',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pingüim',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pintado',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Piolho',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Piranha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pirarocu',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Polvo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pombo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Porco',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Porco-do-mato',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Protozoário (Chagas)',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pulga',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Pulgão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Puma',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Quero-quero',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Rã',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Raposa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Rato',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Rinoceronte',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Robalo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Sabiá',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Sagüi',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Salmão',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Sapo cururu',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Sapo',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Saracura',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Sardinha',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Saúva (formiga)',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Tamanduá',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Tatu',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Tico-tico',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Tigre',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Touro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => ' vaca',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Traira',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Tucano',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Tucunaré',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Uirapuru',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Urso',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Urubu',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Urubu rei',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Urutu',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Veado',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Veado mateiro',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Vespa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Xexéu',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Zebra',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'categoria_id' => 2,
                'nome' => 'Zorrilho',
                'created_at' => $now,
                'updated_at' => $now
            ]

        ]);
    }
}
