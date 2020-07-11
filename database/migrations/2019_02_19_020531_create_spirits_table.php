<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpiritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Generic stats for all spirits
    public function up()
    {
        Schema::create('spirits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();;
            $table->string('abv')->nullable();
            $table->longText('description')->nullable();
            $table->string('brand')->nullable();
            $table->string('distillery')->nullable();
            $table->string('region')->nullable();
            $table->string('spirit_type')->nullable();
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
        Schema::dropIfExists('spirits');
    }
}
