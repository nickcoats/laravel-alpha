<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiographiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('biographies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('title');
			$table->string('position');
			$table->string('photo');
			$table->text('bio');
			$table->string('phone');
			$table->string('email');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('biographies');
	}

}
