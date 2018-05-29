<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('cpf')->nullable();
			$table->date('birth_day')->nullable();
			$table->string('emergency_phone')->nullable();
			$table->string('cep')->nullable();
			$table->string('neighborhood')->nullable();
			$table->string('street')->nullable();
			$table->string('number')->nullable();
			$table->integer('professional_id')->nullable()->index();
			$table->string('sannyas')->nullable();
			$table->integer('customer_type_id')->nullable()->index('customers_type_id_index');
			$table->integer('how_did_find_out_id')->nullable()->index();
			$table->timestamps();
			$table->integer('marital_status')->nullable();
			$table->integer('sexo')->nullable();
			$table->integer('community')->nullable();
			$table->text('comments', 65535)->nullable();
			$table->string('secondary_phone')->nullable();
			$table->integer('friends')->nullable();
			$table->string('country')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
