<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomtypeMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomtype_meetings', function (Blueprint $table) {
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
        Schema::drop('roomtype_meetings');
    }
}
