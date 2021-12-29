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
            $table->id();
            $table->string('title');
            $table->string('cover');
            $table->text('description');
            $table->string('review');
            $table->string('release');
            $table->string('developer');
            $table->string('publisher');
            $table->bigInteger('price');
            $table->integer('discount');
            $table->integer('seller');
            $table->string('os');
            $table->string('processor');
            $table->string('memory');
            $table->string('graphics');
            $table->string('directx');
            $table->string('network');
            $table->string('storage');
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
        Schema::dropIfExists('games');
    }
}
