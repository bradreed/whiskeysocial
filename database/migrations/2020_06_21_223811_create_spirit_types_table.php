<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpiritTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spirit_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('spirit_type_assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('spirit_id')->unsigned();
            $table->foreign('spirit_id')->references('id')->on('spirits');
            $table->integer('spirit_type_id')->unsigned();
            $table->foreign('spirit_type_id')->references('id')->on('spirit_types');
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
        Schema::dropIfExists('spirit_type_assignments');
        Schema::dropIfExists('spirit_types');
    }
}
