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
        Schema::create('testimonial_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role')->nullable(); // contoh: Pemilik UMKM
            $table->text('message');
            $table->integer('rating')->default(5);
            $table->string('avatar')->nullable(); // foto bulat kecil
            $table->integer('order')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
