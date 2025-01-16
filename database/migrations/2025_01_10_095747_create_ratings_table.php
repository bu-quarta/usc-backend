<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('event_post_id')->constrained()->onDelete('cascade'); // Foreign key to event_posts table
            $table->unsignedTinyInteger('rating')->comment('Rating from 1 to 5'); // Rating field
            $table->text('comment')->nullable(); // Optional comment for the rating
            $table->timestamps(); // Created_at and Updated_at fields
        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
