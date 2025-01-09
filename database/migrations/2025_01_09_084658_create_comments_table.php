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
        $table->foreignId('user_id')->nullable()->constrained('users'); // Nullable for anonymous comments
        $table->text('content');
        $table->integer('likes')->default(0);
        $table->integer('dislikes')->default(0);
        $table->timestamp('timestamp')->useCurrent();
        $table->boolean('is_anonymous')->default(false);
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('comments');
    }
}