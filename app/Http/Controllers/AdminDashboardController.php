<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ActivityLog;

class AdminDashboardController extends Controller
{
    /**
     * Get dashboard statistics.
     */
    public function getStatistics()
    {
        // Fetch user counts
        $totalUsers = User::count();
        $activeUsers = User::where('status', 'active')->count();
        $inactiveUsers = User::where('status', 'inactive')->count();

        // Fetch total activities
        $totalActivities = ActivityLog::count();
        $recentActivities = ActivityLog::latest()->limit(5)->get();

        return response()->json([
            'totalUsers' => $totalUsers,
            'activeUsers' => $activeUsers,
            'inactiveUsers' => $inactiveUsers,
            'totalActivities' => $totalActivities,
            'recentActivities' => $recentActivities
        ]);
    }
}
