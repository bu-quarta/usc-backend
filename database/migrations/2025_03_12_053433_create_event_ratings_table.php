<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('event_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('event_posts')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('rating')->comment('1 to 5 stars');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_ratings');
    }
};
