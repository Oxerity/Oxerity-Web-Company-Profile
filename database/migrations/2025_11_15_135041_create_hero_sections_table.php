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
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->nullable();
            $table->string('title_primary');
            $table->string('title_secondary')->nullable();
            $table->text('description')->nullable();

            // $table->string('button_primary_label')->nullable();
            // $table->string('button_primary_link')->nullable();

            // $table->string('button_secondary_label')->nullable();
            // $table->string('button_secondary_link')->nullable();

            $table->string('image')->nullable();

            $table->timestamps();
        });
    }
};
