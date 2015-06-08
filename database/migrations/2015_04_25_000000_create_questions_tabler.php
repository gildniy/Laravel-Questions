<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTabler extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('questionable_id')->unsigned();
            $table->string('questionable_type');

            $table->integer('author_id')->unsigned();

            $table->string('subject');
            $table->text('body');

            // Only filled when a question is marked as answered
            $table->boolean('is_answered')->default(false);
            $table->integer('best_answer_id')->unsigned()->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
