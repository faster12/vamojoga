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
        Schema::create('question_alternatives', function (Blueprint $table) {
            $table->increments('alternative_id');
            $table->unsignedInteger('question_id');
            $table->string('alternative_name')->nullable();            
            $table->enum('alternative_type',['RADIO','CHECK','TEXT','DATE'])->default('TEXT');
            $table->string('alternative_placeholder')->nullable();            
            $table->integer('alternative_order')->nullable()->default(1);

            $table->foreign('question_id')->references('question_id')->on('quiz_questions')->onDelete('cascade');
        });       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_alternatives');
    }
};
