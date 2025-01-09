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
            $table->text('content');
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->timestamp('timestamp')->useCurrent();
            $table->boolean('is_anonymous')->default(false);
            // Ensure the parent_comment_id column is unsigned and matches the id column type
            $table->unsignedBigInteger('parent_comment_id')->nullable();
            $table->foreign('parent_comment_id')->references('comment_id')->on('comments')
                ->onDelete('cascade'); // Optional: Set behavior on delete, such as cascading
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}