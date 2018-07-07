<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePalavrasVisitadasTable.
 */
class CreatePalavrasVisitadasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('palavras_visitadas', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');

            $table->integer('palavra_id')->unsigned();
            $table->foreign('palavra_id')->references('id')->on('palavras')->onDelete('cascade');

            $table->integer('vezes_visitado')->default(1)->unsigned();

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
		Schema::drop('palavras_visitadas');
	}
}
