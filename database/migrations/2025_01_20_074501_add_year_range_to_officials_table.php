<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddYearRangeToOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('officials', function (Blueprint $table) {
            $table->integer('start_year')->after('directory_id'); // Add the start_year column
            $table->integer('end_year')->after('start_year');    // Add the end_year column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('officials', function (Blueprint $table) {
            $table->dropColumn(['start_year', 'end_year']); // Remove the added columns
        });
    }
}
