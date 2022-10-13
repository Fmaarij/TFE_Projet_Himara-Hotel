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
        Schema::create('himaraservices', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('coloredpart')->nullable();
            $table->text('subpara')->nullable();
            $table->string('img')->nullable();
            $table->string('imgtitle')->nullable();
            // $table->text('icon')->nullable();
            $table->foreignId('icon_id')->references('id')->on('roomservices')->onDelete('cascade');
            $table->text('titletitle')->nullable();
            $table->text('titlepara')->nullable();
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
        Schema::dropIfExists('himaraservices');
    }
};
