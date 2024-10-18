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
        Schema::create('projects', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('link');
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
