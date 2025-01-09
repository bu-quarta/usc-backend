<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentersTable extends Migration
{
    public function up()
    {
        Schema::create('commenters', function (Blueprint $table) {
            $table->id('commenter_id');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->unsignedBigInteger('comment_id')->nullable(); // Match type with 'comment_id' in 'comments'
            $table->unsignedBigInteger('reply_id')->nullable(); // Match type with 'reply_id' in 'replies'
            $table->timestamps();
        
            // Foreign key constraints
            $table->foreign('comment_id')->references('comment_id')->on('comments')
                ->onDelete('cascade'); // Optional cascade behavior
            $table->foreign('reply_id')->references('reply_id')->on('replies')
                ->onDelete('cascade');
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('commenters');
    }
}