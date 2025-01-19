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
            $table->id();
            $table->string('header'); // Header of the post
            $table->text('description'); // Description of the post
            $table->dateTime('date_time'); // Date and time field
            $table->string('location');
            $table->string('image_path');
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
