<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('refNr')->nullable();
            $table->string('model')->nullable();
            $table->string('fuelType')->nullable();
            $table->string('exterior')->nullable();
            $table->string('interior')->nullable();
            $table->string('hpkw')->nullable();
            $table->string('firstRegistration')->nullable();
            $table->string('KMs')->nullable();
            $table->string('featuredimage')->nullable();
            $table->text('galleryimages')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
