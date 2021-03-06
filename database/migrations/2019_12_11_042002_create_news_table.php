<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
           lang: {
                0: Indonesian,
                1: English
           }
           type: {
                0: News,
                1: Article,
                2: Schedule
           }
         */
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('lang');
            $table->tinyInteger('type');
            $table->date('schedule')->nullable();
            $table->string('title');
            $table->longText('desc');
            $table->string('path');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('news');
    }
}
