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
        Schema::create('project_skill', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained('projects','id')->cascadeOnDelete();
            $table->foreignId('skill_id')->constrained('skills','id')->cascadeOnDelete();
            $table->primary(['project_id','skill_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_skill');
    }
};
