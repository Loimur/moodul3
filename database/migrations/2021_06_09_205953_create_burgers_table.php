<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBurgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('burgers', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->tinyInteger('price');
            $table->string('image_path');
            $table->string('description');
            $table->string('ingredients');
            $table->boolean('is_gf');
            $table->boolean('is_vegetarian');
            $table->boolean('is_vegan');
            $table->tinyInteger('hotness');
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
        Schema::dropIfExists('burgers');
    }
}
