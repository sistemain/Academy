<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("users", function($table){
			$table->increments("id");
			$table->string("name", 100);
			$table->string("lastname", 100);
			$table->string("password", 60);
			$table->string("username")->unique();
			$table->string("email")->unique();
			$table->timestamps();
			$table->rememberToken();

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
