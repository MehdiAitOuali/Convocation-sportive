<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCONVOCATIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		     Schema::dropIfExists('convocation');
		Schema::create('CONVOCATION', function(Blueprint $table)
		{
			$table->integer('IDMatch')->primary();
			$table->integer('Joueur1')->nullable();
			$table->integer('Joueur2')->nullable();
			$table->integer('Joueur3')->nullable();
			$table->integer('Joueur4')->nullable();
			$table->integer('Joueur5')->nullable();
			$table->integer('Joueur6')->nullable();
			$table->integer('Joueur7')->nullable();
			$table->integer('Joueur8')->nullable();
			$table->integer('Joueur9')->nullable();
			$table->integer('Joueur10')->nullable();
			$table->integer('Joueur11')->nullable();
			$table->integer('Remplacant1')->nullable();
			$table->integer('Remplacant2')->nullable();
			$table->integer('Remplacant3')->nullable();
			$table->integer('Remplacant4')->nullable();
			$table->integer('Remplacant5')->nullable();
			$table->integer('IDArbitrage')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CONVOCATION');
	}

}
