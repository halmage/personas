<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('question1');            
            $table->integer('question2');            
            $table->integer('question3');            
            $table->string('answer1');              
            $table->string('answer2');              
            $table->string('answer3');              
            $table->timestamps();

            $table->foreign('user_id')->references('id')
                                      ->on('users')
                                      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
