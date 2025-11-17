<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();

            // Header
            $table->string('badge_text')->default('Tentang Kami');
            $table->string('title')->default('Oxerity Corp');
            $table->text('description')->nullable();

            // Image
            $table->string('main_image')->nullable();

            // Experience Box
            $table->string('experience_years')->default('5 Tahun');
            $table->string('experience_label')->default('Pengalaman');

            // LOOPING FEATURES (icon, title, description, color)
            $table->json('features')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
