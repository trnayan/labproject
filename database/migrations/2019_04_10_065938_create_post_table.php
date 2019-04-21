<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
             $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('chapter')->nullable();
            $table->string('body')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->string('book')->nullable();
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
        Schema::dropIfExists('post');
    }
}
