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
        Schema::create('general_soap_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_soap_question_id');
            $table->string('general_soap_option');
            $table->timestamps();

            $table->foreign('general_soap_question_id')->references('id')->on('general_soap_questions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_soap_options');
    }
};
