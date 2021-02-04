<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('result_1')->nullable();
            $table->integer('result_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
