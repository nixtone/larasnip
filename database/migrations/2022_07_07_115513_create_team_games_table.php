<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('camo_id');
            $table->unsignedBigInteger('warranter')->nullable();
            $table->integer('appearance');
            $table->timestamps();

            $table->index('team_id', 'team_game_team_idx');
            $table->foreign('team_id', 'team_game_team_fk')->on('teams')->references('id');

            $table->index('game_id', 'team_game_game_idx');
            $table->foreign('game_id', 'team_game_game_fk')->on('games')->references('id');

            $table->index('camo_id', 'team_camo_idx');
            $table->foreign('camo_id', 'team_camo_fk')->on('camuflages')->references('id');

            $table->index('warranter', 'warranter_team_idx');
            $table->foreign('warranter', 'warranter_team_fk')->on('teams')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_games');
    }
};
