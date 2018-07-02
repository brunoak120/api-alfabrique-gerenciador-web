<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEnderecosTable.
 */
class CreateEnderecosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enderecos', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->string('cep', 9)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('tipo_local', 50)->nullable();
            $table->string('logradouro', 100)->nullable();
            $table->string('numero', 40)->nullable();
            $table->string('complemento', 150)->nullable();

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
		Schema::drop('enderecos');
	}
}
