<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEFFECTIFTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('EFFECTIF', function(Blueprint $table)
		{
			$table->foreign('IDCategorie', 'EFFECTIF_ibfk_1')->references('IDCategorie')->on('CATEGORIE')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('EFFECTIF', function(Blueprint $table)
		{
			$table->dropForeign('EFFECTIF_ibfk_1');
		});
	}

}
