<?php

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
            'type' => 'required|string|in:narrative,liquidation,financial,audit,evaluation,glc,other',
            'file' => 'sometimes|file|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $filePath = Storage::url($request->file('file')->store('file/reports', 'public'));
        }

        $report = Report::create([
            'name' => $request->name,
            'type' => $request->type,
            'file_path' => $filePath,
        ]);

        return response()->json(['message' => 'Report uploaded successfully', 'report' => $report], 201);
    }

    // Update a report
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

    public function generateReport(Request $request)
    {
        $year = $request->input('year', date('Y'));

        // Generate a default report for each month
        $generateMonthlyReports = function () {
            return array_map(fn($month) => ['name' => $month, 'total' => 0], [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ]);
        };

        // Build the initial report structure
        $reportData = [
            'year' => $year,
            'glc_passed' => 0,
            'financial_reports' => $generateMonthlyReports(),
            'audit_reports' => $generateMonthlyReports(),
            'events_posted' => $generateMonthlyReports(),
            'accomplishment_reports' => $generateMonthlyReports(),
            'news_and_announcements' => $generateMonthlyReports(),
        ];

        // Fetch report counts from the reports table
        $reports = \DB::table('reports')
            ->selectRaw('MONTH(created_at) as month, type, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupBy('month', 'type')
            ->get();

        // Fetch event posts count
        $eventPosts = \DB::table('event_posts')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupBy('month')
            ->get();

        // Fetch news updates count
        $newsUpdates = \DB::table('news_updates')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupBy('month')
            ->get();

        // Map the month number to month names
        $monthMap = [
            1 => 'Jan',
            2 => 'Feb',
            3 => 'Mar',
            4 => 'Apr',
            5 => 'May',
            6 => 'Jun',
            7 => 'Jul',
            8 => 'Aug',
            9 => 'Sep',
            10 => 'Oct',
            11 => 'Nov',
            12 => 'Dec'
        ];

        // Populate report data from the reports table
        foreach ($reports as $report) {
            $monthName = $monthMap[$report->month] ?? null;
            if ($monthName) {
                switch ($report->type) {
                    case 'financial':
                        $reportData['financial_reports'][array_search($monthName, array_column($reportData['financial_reports'], 'name'))]['total'] = $report->total;
                        break;
                    case 'audit':
                        $reportData['audit_reports'][array_search($monthName, array_column($reportData['audit_reports'], 'name'))]['total'] = $report->total;
                        break;
                    case 'accomplishment':
                        $reportData['accomplishment_reports'][array_search($monthName, array_column($reportData['accomplishment_reports'], 'name'))]['total'] = $report->total;
                        break;
                }
            }
        }

        // Populate events_posted from event_posts table
        foreach ($eventPosts as $event) {
            $monthName = $monthMap[$event->month] ?? null;
            if ($monthName) {
                $reportData['events_posted'][array_search($monthName, array_column($reportData['events_posted'], 'name'))]['total'] = $event->total;
            }
        }

        // Populate news_and_announcements from news_updates table
        foreach ($newsUpdates as $news) {
            $monthName = $monthMap[$news->month] ?? null;
            if ($monthName) {
                $reportData['news_and_announcements'][array_search($monthName, array_column($reportData['news_and_announcements'], 'name'))]['total'] = $news->total;
            }
        }

        return response()->json($reportData);
    }
}
