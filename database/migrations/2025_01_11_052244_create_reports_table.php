<?php

// database/migrations/xxxx_xx_xx_create_reports_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Report name
            $table->enum('type', ['narrative', 'liquidation', 'financial', 'audit', 'evaluation', 'glc', 'other']); // Report type
            $table->string('file_path'); // File path for the uploaded report
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
