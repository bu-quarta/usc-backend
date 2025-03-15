<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('document_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')->constrained()->onDelete('cascade'); // Reference to the documents table
            $table->string('status'); // Status of the document (e.g., PENDING, APPROVED, REJECTED)
            $table->string('remarks')->nullable(); // Additional notes for the status
            $table->timestamps(); // Tracks when the status was created
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_statuses');
    }
}
