<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentStatus;
use Illuminate\Http\Request;

class IVCDashboardController extends Controller
{
    // Fetch dashboard statistics
    public function index()
    {
        // Get total documents count
        $totalDocuments = Document::count();

        // Get count of documents by status
        $statusCounts = DocumentStatus::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');

        // Get recent document activity (latest 5 updates)
        $recentActivity = DocumentStatus::with('document')
            ->latest('updated_at')
            ->limit(5)
            ->get();

        return response()->json([
            'total_documents' => $totalDocuments,
            'status_counts' => $statusCounts,
            'recent_activity' => $recentActivity,
        ]);
    }
}