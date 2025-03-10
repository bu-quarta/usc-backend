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
        Schema::create('csc_directories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('abbr');
            $table->string('slug');
            $table->string('email');
            $table->string('location');
            $table->string('year_range');
            $table->string('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csc_directories');
    }
};
