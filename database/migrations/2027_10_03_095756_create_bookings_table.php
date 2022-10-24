<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_name');
            $table->string('booking_email');
            $table->string('booking_phone')->nullable();
            $table->string('booking_country')->nullable();
            $table->text('booking_date'); //à révoir
            $table->string('booking_adult')->nullable();
            $table->string('booking_child')->nullable();
            $table->foreignId('room_id')->references('id')->on('rooms');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignId('typeofroom_id')->references('id')->on('typeofrooms')->onDelete('cascade');
            // $table->string('booking_roomtype');
            $table->string('booking_comments')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
