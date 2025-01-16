<?php

// app/Http/Controllers/ReportController.php
namespace App\Http\Controllers;

use App\Http\Resources\ReportResource;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    // List all reports or filter by type
    public function index(Request $request)
    {
        $type = $request->input('type'); // Optional query parameter to filter by type

        if ($type) {
            return ReportResource::collection(
                Report::where('type', $type)
                    ->orderBy('updated_at', 'desc')
                    ->get()
            )->collection;
        }

        return ReportResource::collection(
            Report::orderBy('updated_at', 'desc')->get()
        )->collection;
    }

    // Store a new report
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:narrative,liquidation,financial,audit,evaluation,glc,other', // Only allow predefined types
            'file' => 'required|file|mimes:pdf' // Restrict file types
        ]);

        $filePath = null;

        if ($request->hasFile('file')) {
            $filePath = Storage::url($request->file('file')->store('file/reports', 'public'));
        }

        Report::create([
            'name' => $request->name,
            'type' => $request->type,
            'file_path' => $filePath,
        ]);

        return response()->noContent();
    }

    public function update(Request $request, Report $report)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'file|mimes:pdf' // Restrict file types
        ]);

        $filePath = null;

        if ($request->hasFile('file')) {
            $filePath = Storage::url($request->file('file')->store('file/reports', 'public'));
        }

        $report->update([
            'name' => $request->name,
            'file_path' => $filePath ?? $report->file_path,
        ]);

        return response()->noContent();
    }

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
    public function destroy(Report $report)
    {
        // Delete the file from storage
        try {
            Storage::disk('public')->delete($report->file_path);
        } catch (\Exception $e) {
            Log::error('Failed to delete file: ' . $e->getMessage());
        }

        // Delete the report record
        $report->delete();

        return response()->noContent();
    }
}
