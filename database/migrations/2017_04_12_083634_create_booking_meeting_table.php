<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_meetings', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_detailmeeting')->unsigned();
            $table->foreign('id_detailmeeting')->references('id')->on('roomtype_meetings')->onDelete('cascade')->onUpdate('cascade');

            
            $table->enum('time',['Daytime','Nighttime','DaytimeandNighttime']);
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
        Schema::drop('booking_meetings');
    }
}
