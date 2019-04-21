<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEFFECTIFTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		     Schema::dropIfExists('effectif');
		Schema::create('EFFECTIF', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('Nom', 30)->nullable();
			$table->string('Prenom', 30)->nullable();
			$table->string('TypeLicence', 30)->nullable();
			$table->integer('IDCategorie')->nullable()->index('IDCategorie');
			$table->date('date_naissance')->nullable();
			$table->string('adresse', 30)->nullable();
			$table->string('mobile', 30)->nullable();
			$table->string('email', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('EFFECTIF');
	}

}
