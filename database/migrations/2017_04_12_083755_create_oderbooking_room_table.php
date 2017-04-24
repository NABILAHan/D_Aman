<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOderbookingRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oderbooking_rooms', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('booking_code');
            $table->string('name_room');

            $table->integer('id_room')->unsigned();
            $table->foreign('id_room')->references('id')->on('booking_rooms')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('price')->length(100)->unsigned();
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
        Schema::drop('oderbooking_rooms');
    }
}
