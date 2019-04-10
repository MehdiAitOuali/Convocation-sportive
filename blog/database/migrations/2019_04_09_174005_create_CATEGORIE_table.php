<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCATEGORIETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CATEGORIE', function(Blueprint $table)
		{
			$table->integer('IDCategorie', true);
			$table->enum('NomCategorie', array('SENIORS','U17','U15','U14-F','U13','U11-F','U11','U9','U7'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CATEGORIE');
	}

}
