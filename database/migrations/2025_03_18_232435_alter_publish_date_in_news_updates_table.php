<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('news_updates', function (Blueprint $table) {
            $table->dropColumn('publish_date'); // Drop the existing publish_date column
            $table->date('date')->after('slug')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('news_updates', function (Blueprint $table) {
            $table->dropColumn('date'); // Drop the new date column
            $table->timestamp('publish_date')->useCurrent()->after('slug'); // Re-add the original publish_date column
        });
    }
};
