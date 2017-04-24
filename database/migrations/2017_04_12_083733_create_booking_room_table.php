<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_roomtype')->unsigned();
            $table->foreign('id_roomtype')->references('id')->on('roomtypes')->onDelete('cascade')->onUpdate('cascade');
            

            $table->string('num');
            $table->date('book_checkin');
            $table->date('book_checkout');
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
        Schema::drop('booking_rooms');
    }
}
