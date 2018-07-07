<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Services\ConfigsService;

/**
 * Class CreateUsuariosTable.
 */
class CreateUsuariosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('nivel_acesso_id')->unsigned()->default(2);
            $table->foreign('nivel_acesso_id')->references('id')->on('nivel_acessos');

            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos');

            $table->string('nome', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->integer('pontuacao')->default(config('constants.PONTUACAO_INICIAL_JOGADOR'))->nullable();

            $table->rememberToken();
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}
}
