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
            $table->foreignId('typeofroom_id')->constrained()->onDelete('cascade');
            $table->string('bed')->nullable();
            $table->string('availablerooms')->default(8);
            $table->string('maxguests')->nullable();
            $table->string('city')->nullable();
            $table->string('star')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();
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
