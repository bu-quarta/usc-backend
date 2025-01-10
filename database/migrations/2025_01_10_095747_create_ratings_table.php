<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('rating_id');
            $table->unsignedBigInteger('event_post_id'); // Foreign key for event post
            $table->unsignedTinyInteger('rating')->comment('Rating from 1 to 5'); // Rating field
            $table->text('comment')->nullable(); // Optional comment for the rating
            $table->timestamps(); // Created_at and Updated_at fields

            // Foreign key constraint
            $table->foreign('event_post_id')->references('post_id')->on('event_posts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}