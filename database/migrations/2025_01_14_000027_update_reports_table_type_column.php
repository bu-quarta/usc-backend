<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateReportsTableTypeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            // Drop the existing 'type' column
            $table->dropColumn('type');

            // Add the new 'type' column as an enum
            $table->enum('type', ['accomplishment', 'financial', 'audit', 'other', 'glc'])->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            // Drop the new 'type' column
            $table->dropColumn('type');

            // Re-add the old 'type' column as a string
            $table->string('type')->nullable()->after('id');
        });
    }
}
