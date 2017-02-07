<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration {

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

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			 $table->string('cus_name',100);
			 $table->string('cus_surname',100);
			 $table->string('cus_phonenumber',20);
			 $table->string('cus_email',255);
			 $table->string('cus_address',255);
			 $table->string('cus_state',255);
			 $table->string('cus_city',255);
			 $table->string('cus_country',255);
			 $table->string('cus_postalcode',255);
			 
			 $table->integer('book_id')->unsigned();
			$table->foreign('book_id')->references('id')->on('booking_meetings')->onDelete('cascade')->onUpdate('cascade');

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
		Schema::drop('customers');
	}

}
