<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
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
    public function index(Request $request)
    {
        $query = EventPost::query();

        if ($request->input('client')) {
            $query->orderBy('date_time', 'desc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        return EventPostResource::collection($query->get())->collection;
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
    public function show($slug)
    {
        $eventPost = EventPost::where('slug', $slug)->first();

        if (!$eventPost) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        //Fetching previous and next event posts
        $previousEvent = EventPost::where('date_time', '<', $eventPost->date_time)
            ->orderBy('date_time', 'desc')
            ->select('slug', 'header')
            ->first() ?? (object) ['slug' => '', 'header' => ''];

        $nextEvent = EventPost::where('date_time', '>', $eventPost->date_time)
            ->orderBy('date_time', 'asc')
            ->select('slug', 'header')
            ->first() ?? (object) ['slug' => '', 'header' => ''];


        // Fetching other events (not the current one) for recommendations
        $otherEvents = EventPost::where('id', '!=', $eventPost->id)
            ->orderBy('date_time', 'desc')
            ->limit(4)
            ->get();

        $comments = Comment::where('event_post_id', $eventPost->id)->orderBy('created_at', 'desc')->get();

        return response()->json([
            'event_post' => EventPostResource::make($eventPost),
            'comments' => CommentResource::collection($comments),
            'previous_event' => [
                'slug' => $previousEvent->slug,
                'title' => $previousEvent->header,
            ],
            'next_event' => [
                'slug' => $nextEvent->slug,
                'title' => $nextEvent->header,
            ],
            'other_events' => EventPostResource::collection($otherEvents),
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
