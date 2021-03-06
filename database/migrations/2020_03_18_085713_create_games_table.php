<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->text('reviewSummary')->nullable();
            $table->string('bannerScreenshot');
            $table->string('Rating')->nullable();
            $table->string('type');
            $table->integer('percentRecommended');
            $table->integer('numReviews');
            $table->integer('numTopCriticReviews');
            $table->integer('medianScore');
            $table->integer('averageScore');
            $table->integer('topCriticScore');
            $table->integer('percentile');
            $table->string('tier');
            $table->boolean('hasLootBoxes');
            $table->boolean('isMajorTitle');
            $table->string('name');
            $table->text('description');
            $table->timestamp('firstReleaseDate');
            $table->boolean('Sony')->nullable();
            $table->boolean('Microsoft')->nullable();
            $table->boolean('Nintendo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
