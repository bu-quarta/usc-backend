<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeEmailNullableAndNotUniqueInOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('officials', function (Blueprint $table) {
            // Drop the unique constraint first
            $table->dropUnique(['email']);
            // Then make the column nullable (if not already nullable)
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('officials', function (Blueprint $table) {
            // Reverse to make the email column unique again
            $table->string('email')->nullable(false)->unique()->change();
        });
    }
}
