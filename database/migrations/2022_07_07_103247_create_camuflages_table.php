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
        Schema::create('camuflages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('team_id');
            $table->timestamps();

            $table->index('team_id', 'camuflage_team_idx');
            $table->foreign('team_id', 'camuflage_team_fk')->on('teams')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camuflages');
    }
};
