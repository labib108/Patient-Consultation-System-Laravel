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
        Schema::create('basic_soap_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appointment_id');
            $table->unsignedBigInteger('basic_soap_question_id');
            $table->unsignedBigInteger('basic_soap_option_id');
            $table->string('basic_soap_answer');
            $table->timestamps();

            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
            $table->foreign('basic_soap_question_id')->references('id')->on('basic_soap_questions')->onDelete('cascade');
            $table->foreign('basic_soap_option_id')->references('id')->on('basic_soap_option')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_soap_answers');
    }
};
