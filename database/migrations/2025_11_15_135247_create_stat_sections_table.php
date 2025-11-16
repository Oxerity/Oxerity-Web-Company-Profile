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
        Schema::create('stat_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');        // contoh: "500+"
            $table->string('subtitle');     // contoh: "UMKM Terbantu"
            $table->unsignedInteger('order')->default(0);
            $table->timestamps();
        });
    }
};
