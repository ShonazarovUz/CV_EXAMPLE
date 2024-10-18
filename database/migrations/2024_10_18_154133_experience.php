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
        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained(); // Agar `student_id` cheklovli bo'lsa
            $table->string('name');
            $table->text('description');
            $table->timestamp('star_date'); // Faqat bitta `star_date` ustuni kerak
            // Yana boshqa ustunlar bo'lishi mumkin
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
