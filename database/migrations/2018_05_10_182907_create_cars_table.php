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
            $table->unsignedInteger('motorcapacity')->nullable();
            $table->unsignedInteger('power')->nullable();
            $table->string('model')->nullable();
            $table->string('bodytype')->nullable();
            $table->string('gearboxtype')->nullable();
            $table->string('co2emmision')->nullable();
            $table->string('location')->nullable();
            $table->string('color')->nullable();
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
