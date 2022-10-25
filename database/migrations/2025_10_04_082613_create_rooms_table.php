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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->foreignId('typeofroom_id')->constrained();
            // $table->foreignId('tag_id')->constrained()->onDelete('cascade');
            // $table->foreignId('tag_id')->references('id')->on('tags');
            $table->integer('bed');
            $table->integer('availablerooms')->default(8);
            $table->string('maxguests');
            $table->string('city');
            $table->string('star')->default(0);
            $table->text('description')->nullable();
            $table->text('description1');
            $table->boolean('Ptoshow')->default(0);
            $table->string('promo')->default(0);
            $table->integer('checkin')->default(0);
            $table->integer('checkout')->default(0);
            $table->integer('price');
            $table->json('service')->nullable();
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
        Schema::dropIfExists('rooms');
    }
};
