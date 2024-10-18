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
        Schema::create('students', function(Blueprint $table){
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('nt_id');
            $table->string('photo');
            $table->string('phone');
            $table->string('profession');
            $table->string('biography');
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
