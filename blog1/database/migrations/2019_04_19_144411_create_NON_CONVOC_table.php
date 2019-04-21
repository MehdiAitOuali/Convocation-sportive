<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNONCONVOCTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		     Schema::dropIfExists('non_convoc');
		Schema::create('NON_CONVOC', function(Blueprint $table)
		{
			$table->integer('IDEffectif');
			$table->date('DateNC');
			$table->enum('Statut', array('Exempt','Absent'))->nullable();
			$table->primary(['IDEffectif','DateNC']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('NON_CONVOC');
	}

}
