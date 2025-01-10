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
            $table->unsignedBigInteger('event_post_id'); // Foreign key for event post
            $table->text('content')->nullable()->change();  // Allow NULL values
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->timestamp('timestamp')->useCurrent();
            $table->boolean('is_anonymous')->default(false);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('event_post_id')->references('post_id')->on('event_posts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}