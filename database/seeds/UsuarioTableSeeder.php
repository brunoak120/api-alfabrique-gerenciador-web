<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'nivel_acesso_id' => '1',
                'endereco_id' => '1',
                'nome' => 'Administrador',
                'email' => 'adm@hotmail.com',
                'password' => bcrypt('12345')
            ], [
                'nivel_acesso_id' => '2',
                'endereco_id' => '2',
                'nome' => 'Jogador X',
                'email' => 'jogador@alfabrinque.com',
                'password' => bcrypt('12345')
            ]
        ]);
    }
}
