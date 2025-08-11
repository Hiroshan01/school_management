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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('reg_no')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address');
            $table->integer('mobile');
            $table->string('subject');
            $table->string('university')->nullable('true');
            $table->integer('age')->nullable('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
