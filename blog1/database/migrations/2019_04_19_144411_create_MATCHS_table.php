<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMATCHSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		     Schema::dropIfExists('matchs');
		Schema::create('MATCHS', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('IDEquipe')->nullable();
			$table->dateTime('DateMatch')->nullable();
			$table->string('ClubAdverse', 50)->nullable();
			$table->string('LocaliteClubAdverse', 50)->nullable();
			$table->string('EquipeAdverse', 50)->nullable();
			$table->string('Terrain', 50)->nullable();
			$table->string('Competition', 50)->nullable();
			$table->enum('Deplacement', array('Domicile','Extérieur'))->nullable();
			$table->string('Site', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('MATCHS');
	}

}
