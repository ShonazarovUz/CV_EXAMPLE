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
        Schema::create('cv', function(Blueprint $table){
            $table->id();
            $table->foreignId('students_id')->constrained()->onDelete('cascade');
            $table->foreignId('lessons_id')->constrained()->onDelete('cascade');
            $table->foreignId('hard_skills_id')->constrained()->onDelete('cascade');
            $table->foreignId('soft_skills_id')->constrained()->onDelete('cascade');
            $table->foreignId('projects_id')->constrained()->onDelete('cascade');
            $table->foreignId('experiences_id')->constrained()->onDelete('cascade');  
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
