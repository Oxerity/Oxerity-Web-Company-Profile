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
        Schema::create('service_sections', function (Blueprint $table) {
            $table->id();
            $table->text('icon')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->json('features')->nullable();  // list bullet points

            $table->unsignedInteger('order')->default(0);
            $table->timestamps();
        });
    }
};
