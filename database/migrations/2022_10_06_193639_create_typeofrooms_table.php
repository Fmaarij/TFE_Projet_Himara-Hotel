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
        Schema::create('typeofrooms', function (Blueprint $table) {
            $table->id();

            // $table->foreignId('room_id')->constrained()->onDelete('cascade');
            // $table->string('type')->nullable();
            // $table->string('max/5')->nullable();
            // $table->string('reste')->nullable();
            // $table->string('bed')->nullable();
            // $table->string('maxguests')->nullable();
            $table->string('type_name')->nullable();
            
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
        Schema::dropIfExists('typeofrooms');
    }
};
