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
            // Removed parent_comment_id and foreign key constraint
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
