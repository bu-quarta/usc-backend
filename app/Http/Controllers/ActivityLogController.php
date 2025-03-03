<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityLog;
use Illuminate\Http\JsonResponse;

class ActivityLogController extends Controller
{
    public function publicRelations(): JsonResponse
    {
        return response()->json(ActivityLog::where('category', 'public_relations')->get());
    }

    public function auditReports(): JsonResponse
    {
        return response()->json(ActivityLog::where('category', 'audit_report')->get());
    }

    public function fileTracking(): JsonResponse
    {
        return response()->json(ActivityLog::where('category', 'file_tracking')->get());
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string',
            'activity' => 'required|string',
            'category' => 'required|in:public_relations,audit_report,file_tracking',
            'date' => 'required|date',
            'time' => 'required'
        ]);

        $activityLog = ActivityLog::create([
            'name' => $request->name,
            'activity' => $request->activity,
            'category' => $request->category,
            'date' => $request->date,
            'time' => $request->time
        ]);

        return response()->json(['message' => 'Activity log created successfully', 'data' => $activityLog], 201);
    }
}