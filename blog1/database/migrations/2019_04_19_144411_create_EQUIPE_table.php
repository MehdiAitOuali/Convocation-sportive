<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEQUIPETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		     Schema::dropIfExists('equipe');
		Schema::create('EQUIPE', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('NomEquipe', 30)->nullable();
			$table->integer('IDCategorie')->nullable()->index('IDCategorie');
			$table->string('Responsable', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('EQUIPE');
	}

}
