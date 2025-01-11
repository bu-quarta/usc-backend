<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Document name
            $table->string('document_format')->unique(); // Unique format like DOC-000-XXXX
            $table->timestamps(); // Timestamps for creation and update
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
