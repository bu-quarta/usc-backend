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
    Schema::table('ratings', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable();  // Add user_id column
        $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');  // Optional: foreign key to users table
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ratings', function (Blueprint $table) {
            //
        });
    }
};
