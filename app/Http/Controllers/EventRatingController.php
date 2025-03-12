<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventRatingResource;
use App\Models\EventRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventRatingController extends Controller
{
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'event_id' => 'required|exists:event_posts,id',
    //         'rating' => 'required|integer|min:1|max:5'
    //     ]);

    //     $rating = EventRating::updateOrCreate(
    //         ['event_id' => $request->event_id, 'user_id' => Auth::id()],
    //         ['rating' => $request->rating]
    //     );

    //     return new EventRatingResource($rating);
    // }
    
    public function store(Request $request)
{
    $request->validate([
        'event_id' => 'required|exists:event_posts,id',
        'rating' => 'required|integer|min:1|max:5',
        'user_id' => 'nullable|exists:users,id' // Allow user_id input for testing
    ]);

    $userId = $request->user_id ?? Auth::id() ?? 9999; // Use provided user_id or default for testing

    $rating = EventRating::updateOrCreate(
        ['event_id' => $request->event_id, 'user_id' => $userId],
        ['rating' => $request->rating]
    );

    return response()->json([
        'message' => 'Rating submitted successfully',
        'data' => $rating
    ]);
}


    public function index($event_id)
    {
        $ratings = EventRating::where('event_id', $event_id)->latest()->get();
        return EventRatingResource::collection($ratings);
    }

    public function averageRating($event_id)
    {
        $average = EventRating::where('event_id', $event_id)->avg('rating');
        return response()->json(['average_rating' => round($average, 1)]);
    }
}
