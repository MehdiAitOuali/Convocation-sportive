<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateABSENCETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		     Schema::dropIfExists('absence');
		Schema::create('ABSENCE', function(Blueprint $table)
		{
			$table->integer('IDEffectif');
			$table->date('DateAbsence');
			$table->enum('Motif', array('Blessé','Non licencié','Suspendu'))->nullable();
			$table->primary(['IDEffectif','DateAbsence']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ABSENCE');
	}

}
