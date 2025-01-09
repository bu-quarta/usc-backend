<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentReactionsTable extends Migration
{
    public function up()
{
    Schema::create('comment_reactions', function (Blueprint $table) {
        $table->id('reaction_id');  // Primary key for the reaction
        $table->unsignedBigInteger('comment_id')->nullable(); // Match type with 'comment_id' in 'comments'
        $table->foreignId('user_id')->constrained('users'); // Foreign key to users table (who reacted)
        $table->enum('reaction_type', ['like', 'dislike']); // Type of reaction (like or dislike)
        $table->timestamps();
        // Foreign key constraints
        $table->foreign('comment_id')->references('comment_id')->on('comments')
        ->onDelete('cascade'); // Optional cascade behavior
    });
}
   
        public function down()
        {
            Schema::dropIfExists('comment_reactions');
        }
}