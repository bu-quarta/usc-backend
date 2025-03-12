<?php

namespace App\Http\Controllers;

use App\Models\EventPost;
use App\Models\EventRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuditorDashboardController extends Controller
{
    public function index()
    {
        // Get total events
        $totalEvents = EventPost::count();

        // Get total respondents
        $totalRespondents = EventRating::distinct('user_id')->count();

        // Get average rating
        $averageRating = EventRating::avg('rating');

        // Get ratings per event
        $eventRatings = EventPost::withAvg('ratings', 'rating')
            ->withCount('ratings')
            ->orderByDesc('ratings_count')
            ->take(5)
            ->get();

        return response()->json([
            'total_events' => $totalEvents,
            'total_respondents' => $totalRespondents,
            'average_rating' => round($averageRating, 1),
            'event_ratings' => $eventRatings
        ]);
    }
}
