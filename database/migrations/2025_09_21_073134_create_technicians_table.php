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
        Schema::create('technicians', function (Blueprint $table) {
            $table->id();
            $table->string('tecnician_id')->unique();
            $table->string('name');
            $table->string('phone');
            $table->string('image');
            $table->string('dob');
            $table->string('nid');
            $table->string('passport_no')->nullable();
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('join_date');
            $table->string('Type_of_work');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technicians');
    }
};
