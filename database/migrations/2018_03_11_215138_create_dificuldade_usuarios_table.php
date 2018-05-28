<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateDificuldadeUsuariosTable.
 */
class CreateDificuldadeUsuariosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dificuldade_usuarios', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('caracteristica_id')->unsigned();
            $table->foreign('caracteristica_id')->references('id')->on('caracteristicas');

            $table->integer('dificuldade_id')->unsigned();
            $table->foreign('dificuldade_id')->references('id')->on('dificuldades');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');

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
		Schema::drop('dificuldade_usuarios');
	}
}
