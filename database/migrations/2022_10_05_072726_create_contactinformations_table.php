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
        Schema::create('contactinformations', function (Blueprint $table) {
            $table->id();
            $table->string('adress');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('email');
            $table->string('gsm');
            $table->string('phone');
            $table->string('website');
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
        Schema::dropIfExists('contactinformations');
    }
};
