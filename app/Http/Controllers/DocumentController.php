<?php

namespace App\Http\Controllers;

use App\Http\Resources\DocumentResource;
use App\Models\Document;
use App\Models\DocumentStatus;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DocumentController extends Controller
{
    // List all documents with their latest status
    public function index()
    {
        $documents = Document::with(['statuses' => function ($query) {
            $query->orderByDesc('updated_at')->limit(1); // Fetch only the latest status
        }])->get();

        return response()->json(DocumentResource::collection($documents));
    }

    // Store a new document and set initial status
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Validate name
        ]);

        // Create a new document
        $document = Document::create([
            'name' => $request->name,
            'document_format' => $this->generateDocumentFormat(),
        ]);

        // Add initial status as PENDING
        DocumentStatus::create([
            'document_id' => $document->id,
            'status' => 'PENDING',
        ]);
    }

    // Show a specific document with its status history using document_format
    public function show(Request $request)
    {
        try {
            // Validate the request input
            $validated = $request->validate([
                'document_format' => 'required|string|exists:documents,document_format'
            ]);

            // Find the document using document_format
            $document = Document::with(['statuses' => function ($query) {
                $query->orderByDesc('updated_at');
            }])->where('document_format', $validated['document_format'])->firstOrFail();

            // Format the created_at timestamps
            $document->statuses->transform(function ($status) {
                $status->date = \Carbon\Carbon::parse($status->created_at)->format('F d, Y, h:i A');
                return $status;
            });

            return response()->json($document);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Document not found'], 404);
        }
    }

    // Update the status of a document
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:PENDING,SIGNED,FORWARDED,RECEIVED', // Validate status
            'name' => 'required|string|max:255', // Validate name
            'remarks' => 'nullable|string', // Validate remarks
        ]);

        // Check if the document exists
        $document = Document::findOrFail($id);

        $document->name = $request->name;
        $document->save();

        // Add a new status entry in the document_statuses table
        $newStatus = DocumentStatus::create([
            'document_id' => $document->id,
            'status' => $request->status,
            'remarks' => $request->remarks,
        ]);

        return response()->noContent();
    }

    // Delete a document and its statuses
    public function destroy($id)
    {
        $document = Document::findOrFail($id);
        $document->delete();

        return response()->json(['message' => 'Document deleted successfully']);
    }

    // Generate a unique document format (e.g., DOC-000-XXXX)
    private function generateDocumentFormat()
    {
        $lastDocument = Document::latest()->first();
        $nextId = $lastDocument ? $lastDocument->id + 1 : 1;

        return 'DOC-' . str_pad($nextId, 4, '0', STR_PAD_LEFT);
    }
}
