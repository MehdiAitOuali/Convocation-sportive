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
		     Schema::dropIfExists('arbitrage');
		Schema::create('ARBITRAGE', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('IDMatch')->nullable();
			$table->string('ArbitreCentre', 50)->nullable();
			$table->string('ArbitreTouche1', 50)->nullable();
			$table->string('ArbitreTouche2', 50)->nullable();
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
