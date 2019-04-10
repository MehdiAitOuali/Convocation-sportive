<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEQUIPETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('EQUIPE', function(Blueprint $table)
		{
			$table->foreign('IDCategorie', 'EQUIPE_ibfk_1')->references('IDCategorie')->on('CATEGORIE')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('EQUIPE', function(Blueprint $table)
		{
			$table->dropForeign('EQUIPE_ibfk_1');
		});
	}

}
