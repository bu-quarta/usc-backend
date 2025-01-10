<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPostsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('event_posts', function (Blueprint $table) {
        $table->id('post_id'); // Primary key (unsignedBigInteger by default in Laravel 7+)
        $table->string('header'); // Header of the post
        $table->text('description'); // Description of the post
        $table->json('image_paths')->nullable(); // JSON field to store image paths
        $table->enum('status', ['UPCOMING', 'ONGOING', 'PAST'])->default('UPCOMING'); // Status field with 3 values
        $table->timestamps(); // Created_at and Updated_at fields
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_posts');
    }
}