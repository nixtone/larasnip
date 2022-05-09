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
        Schema::dropIfExists('posts');

            /*::table('posts', function (Blueprint $table) {
            //
        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('post_content');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('likes')->nullable(); // не может иметь отрицательное число
            $table->boolean('is_published')->default(1);
            $table->timestamps();
            $table->softDeletes(); // мягкое удаление
        });
    }
};
