<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArreglosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arreglos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->string('ImgLarge');
            $table->string('imgSmall');
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
        Schema::dropIfExists('arreglos');
    }
}
