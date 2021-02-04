<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToGamesTable extends Migration
{
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->unsignedInteger('team_1_id')->nullable();
            $table->foreign('team_1_id', 'team_1_fk_2144641')->references('id')->on('teams');
            $table->unsignedInteger('team_2_id')->nullable();
            $table->foreign('team_2_id', 'team_2_fk_2144642')->references('id')->on('teams');
        });
    }
}
