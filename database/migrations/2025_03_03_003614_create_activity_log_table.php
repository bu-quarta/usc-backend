<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('activity_log', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // User or entity name
            $table->text('activity'); // Description of the activity
            $table->string('category'); // e.g., public_relations, audit_report, file_tracking
            $table->date('date'); // Date of activity
            $table->time('time'); // Time of activity
            $table->timestamps(); // Created at & Updated at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_log');
    }
};
