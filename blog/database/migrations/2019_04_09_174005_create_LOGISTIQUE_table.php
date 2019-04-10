<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLOGISTIQUETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('LOGISTIQUE', function(Blueprint $table)
		{
			$table->integer('IDEffectif');
			$table->integer('IDMatch');
			$table->enum('Tache', array('Maillot','Vestiaires','Buvette','Voiture'))->nullable();
			$table->primary(['IDEffectif','IDMatch']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('LOGISTIQUE');
	}

}
