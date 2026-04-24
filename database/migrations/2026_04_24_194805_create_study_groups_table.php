<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subject');
            $table->foreignId('creator_id')->constrained('users')->onDelete('cascade');
            $table->string('schedule'); // ex: "Jeudi 14h"
            $table->enum('type', ['tutorat', 'revision']);
            $table->integer('max_members')->default(5);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_groups');
    }
};