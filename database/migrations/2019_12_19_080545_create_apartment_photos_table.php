<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_apartment')->unsigned();
            $table->string('photo_url')->nullable();
            $table->integer('sort')->nullable();

            $table->foreign('id_apartment')->references('id')->on('apartments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartment_photos');
    }
}
