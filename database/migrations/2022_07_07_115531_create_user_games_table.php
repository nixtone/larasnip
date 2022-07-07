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
        Schema::create('user_games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tg_id');
            $table->unsignedBigInteger('team_id');
            $table->timestamps();

            $table->index('user_id', 'user_ug_idx');
            $table->foreign('user_id', 'user_ug_fk')->on('users')->references('id');
            $table->index('tg_id', 'tg_ug_idx');
            $table->foreign('tg_id', 'tg_ug_fk')->on('team_games')->references('id');
            $table->index('team_id', 'team_ug_idx');
            $table->foreign('team_id', 'team_ug_fk')->on('teams')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_games');
    }
};
