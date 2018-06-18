<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCaracteristicasPalavrasTable.
 */
class CreateCaracteristicasPalavrasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caracteristicas_palavras', function(Blueprint $table) {
            $table->integer('palavra_id')->unsigned();
            $table->foreign('palavra_id')->references('id')->on('palavras');

            $table->integer('caracteristica_id')->unsigned();
            $table->foreign('caracteristica_id')->references('id')->on('caracteristicas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('caracteristicas_palavras');
	}
}
