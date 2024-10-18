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
        Schema::create('soft_skills', function(Blueprint $table){
            $table->id();
            $table->string('skill_name');
            $table->text('description');
            $table->integer('level');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
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
