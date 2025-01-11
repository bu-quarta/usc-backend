<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->unsignedBigInteger('event_post_id')->nullable(); // Foreign key for event post
            $table->unsignedBigInteger('news_update_id')->nullable(); // Foreign key for news_update
            $table->enum('comment_type', ['news_update', 'event_post']); // Type of comment
            $table->text('content')->nullable();  // Allow NULL values
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->timestamp('timestamp')->useCurrent();
            $table->boolean('is_anonymous')->default(false);
            $table->timestamps();

            // Foreign key constraint for event_post_id (nullable for news update comments)
            $table->foreign('event_post_id')->references('post_id')->on('event_posts')->onDelete('cascade');
            
            // Foreign key constraint for news_update_id (nullable for event post comments)
            $table->foreign('news_update_id')->references('update_id')->on('news_updates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
