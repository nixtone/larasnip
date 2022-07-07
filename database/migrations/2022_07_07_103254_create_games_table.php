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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location_name');
            $table->string('location_coordinates');
            $table->text('description');
            $table->unsignedBigInteger('team_id');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->timestamps();

            $table->index('team_id', 'games_team_idx');
            $table->foreign('team_id', 'games_team_fk')->on('teams')->references('id');
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
};
