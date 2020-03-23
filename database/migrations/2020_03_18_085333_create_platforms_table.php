<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('shortName');
            $table->string('imageSrc');
        });

        Schema::create('game_platform', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('platform_id');

            $table->unique(['game_id', 'platform_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platforms');
    }
}
