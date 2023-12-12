<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quiz_questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->unsignedInteger('quiz_id');
            $table->string('question_name');
            $table->string('question_text')->nullable();
            $table->string('question_note')->nullable()->comment('Used for tooltip explanation');
            $table->string('question_optional')->default(false);
            $table->integer('question_order')->nullable()->default(1);

            $table->foreign('quiz_id')->references('quiz_id')->on('quizzes')->onDelete('cascade');

        });            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_questions');
    }
};
