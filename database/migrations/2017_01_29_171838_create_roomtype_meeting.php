<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomtypeMeeting extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roomtyp_meetings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('roomtype_name', ['rimlay','leelayai','pradoo','jaturus','leelalak','limnum']);
			$table->integer('roomtype_price')->length(100)->unsigned();
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
		Schema::drop('roomtyp_meetings');
	}

}
