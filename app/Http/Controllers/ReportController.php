<?php

// app/Http/Controllers/ReportController.php
namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    // List all reports or filter by type
    public function index(Request $request)
    {
        $type = $request->query('type'); // Optional query parameter to filter by type

        if ($type) {
            return Report::where('type', $type)->get();
        }

        return Report::all();
    }

    // Store a new report
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:narrative,liquidation,financial,audit,evaluation,glc', // Only allow predefined types
            'file' => 'required|file|mimes:pdf,docx,txt' // Restrict file types
        ]);

        $filePath = $request->file('file')->store('reports'); // Save the file in the 'reports' directory

        $report = Report::create([
            'name' => $request->name,
            'type' => $request->type,
            'file_path' => $filePath,
        ]);

        return response()->json($report, 201);
    }

    // Show a specific report
    // Show a specific report
public function show($id)
{
    $report = Report::find($id); // Use find() instead of findOrFail()

    if (!$report) {
        return response()->json(['message' => 'Report not found'], 404);
    }

    // Serve the file from storage for viewing
    if (Storage::exists($report->file_path)) {
        return Storage::download($report->file_path);  // This will prompt the user to download the file
    }

    return response()->json(['message' => 'File not found'], 404);
}


    // Delete a report
    public function destroy($id)
    {
        $report = Report::findOrFail($id);

        // Delete the file from storage
        Storage::delete($report->file_path);

        // Delete the report record
        $report->delete();

        return response()->json(['message' => 'Report deleted']);
    }
}
