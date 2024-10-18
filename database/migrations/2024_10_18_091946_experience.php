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
        Schema::create('experiences', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('Description');
            $table->timestamp('start_data');
            $table->timestamp('end_data');
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
