<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistilleryLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distillery_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('distiller_id')->unsigned();
            $table->foreign('distiller_id')->references('id')->on('distillers');
            $table->string('street_address')->nullable();
            $table->string('street_address2')->nullable();
            $table->string('locality')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->boolean('open_to_public')->nullable();
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
        Schema::dropIfExists('distillery_locations');
    }
}
