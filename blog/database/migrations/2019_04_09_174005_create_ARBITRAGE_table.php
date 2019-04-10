<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateARBITRAGETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ARBITRAGE', function(Blueprint $table)
		{
			$table->integer('IDMatch')->primary();
			$table->string('Arbitre_centre', 50)->nullable();
			$table->string('Arbitre_touche', 50)->nullable();
			$table->string('Dirigeant', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ARBITRAGE');
	}

}
