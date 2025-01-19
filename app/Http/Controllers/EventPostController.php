<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventPostResource;
use App\Models\EventPost;
use App\Models\Comment;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class EventPostController extends Controller
{
    /**
     * Get all event posts.
     */
    public function index()
    {
        return EventPostResource::collection(
            EventPost::orderBy('created_at', 'desc')->get()
        )->collection;
    }

    /**
     * Store a newly created event post.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date_time' => 'required|string',
            'location' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $date_time = Carbon::parse($validated['date_time'], 'UTC')->setTimezone('Asia/Manila');

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = Storage::url($request->file('image')->store('images/event_posts', 'public'));
        }

        EventPost::create([
            'header' => $validated['title'],
            'description' => $validated['description'],
            'date_time' => $date_time,
            'location' => $validated['location'],
            'image_path' => $imagePath,
        ]);

        return response()->noContent();
    }

    /**
     * Show a specific event post, including comments, ratings, and navigation links.
     */
    public function show($id): JsonResponse
    {
        $eventPost = EventPost::find($id);

        if (!$eventPost) {
            return response()->json(['message' => 'Event post not found'], 404);
        }

        // Fetching comments for the specific event post
        $comments = Comment::where('event_post_id', $id)->get();

        // Fetching ratings only for the specific event post
        $ratings = Rating::where('event_post_id', $id)->get();

        // Calculating the average rating for the specific event
        $averageRating = $ratings->avg('rating');

        // Fetching previous and next events based on post_id
        $previousEvent = EventPost::where('post_id', '<', $id)->orderBy('post_id', 'desc')->first();
        $nextEvent = EventPost::where('post_id', '>', $id)->orderBy('post_id', 'asc')->first();

        // Fetching other events (not the current one) for recommendations
        $otherEvents = EventPost::where('post_id', '!=', $id)->limit(5)->get();

        return response()->json([
            'event_post' => $eventPost,
            'comments' => $comments,
            'ratings' => [
                'all_ratings' => $ratings, // Ratings specific to the event
                'average_rating' => $averageRating, // Average rating for the specific event
            ],
            'navigation' => [
                'previous_event' => $previousEvent,
                'next_event' => $nextEvent,
            ],
            'other_events' => $otherEvents,
        ]);
    }

    //update
    public function update(Request $request, EventPost $eventPost)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date_time' => 'required|string',
            'location' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $date_time = Carbon::parse($validated['date_time'], 'UTC')->setTimeZone('Asia/Manila');

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = Storage::url($request->file('image')->store('images/event_posts', 'public'));
        }

        $eventPost->update([
            'header' => $validated['title'],
            'description' => $validated['description'],
            'date_time' => $date_time,
            'location' => $validated['location'],
            'image_path' => $imagePath ?? $eventPost->image_path,
        ]);

        return response()->noContent();
    }
    /**
     * Delete a specific event post along with its related data.
     */
    public function destroy(EventPost $eventPost)
    {
        $eventPost->delete();
        return response()->noContent();
    }
}
