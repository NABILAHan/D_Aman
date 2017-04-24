<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOderbookingMeetimgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oderbooking_meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_code');
            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_meeting')->unsigned();
            $table->foreign('id_meeting')->references('id')->on('booking_meetings')->onDelete('cascade')->onUpdate('cascade');

            $table->enum('status',['รอการอนุมัติ','อนุมัติ']);
            $table->string('name_room_meeting');
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
        Schema::drop('oderbooking_meetimgs');
    }
}
