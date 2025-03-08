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
        Schema::create('glc_voting_non_votings', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('short');
            $table->string('college')->nullable();
            $table->string('name')->nullable();
            $table->string('organization')->nullable();
            $table->string('publication')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('glc_voting_non_votings');
    }
};
