<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('town');
            $table->string('district');
            $table->integer('price1-2');
            $table->integer('price3-9');
            $table->integer('price10-29');
            $table->integer('price30');
            $table->integer('rooms');
            $table->string('places');
            $table->string('facilities');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
