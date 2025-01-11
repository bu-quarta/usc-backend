<?php

namespace App\Http\Controllers;

use App\Models\EventPost;
use App\Models\Comment;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EventPostController extends Controller
{
    /**
     * Get all event posts.
     */
    public function index(): JsonResponse
    {
        $eventPosts = EventPost::all();

        return response()->json($eventPosts);
    }

    /**
     * Store a newly created event post.
     */
    public function store(Request $request): JsonResponse
    {
        $header = $request->input('header', 'Default Event Header');
        $description = $request->input('description', 'Default Event Description');
        $status = $request->input('status', 'UPCOMING');

        $eventPost = EventPost::create([
            'header' => $header,
            'description' => $description,
            'image_paths' => $request->input('image_paths', []),
            'status' => $status,
        ]);

        return response()->json([
            'message' => 'Event post created successfully',
            'event_post' => $eventPost,
        ], 201);
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

    /**
     * Add a comment to an event post.
     */
    public function addComment(Request $request, $eventPostId): JsonResponse
    {
        $validated = $request->validate([
            'content' => 'required|string|max:1000', // Validate comment content
            'user_id' => 'required|exists:users,id', // Validate user ID
        ]);

        $eventPost = EventPost::find($eventPostId);

        if (!$eventPost) {
            return response()->json(['message' => 'Event post not found'], 404);
        }

        // Create and save the comment
        $comment = Comment::create([
            'event_post_id' => $eventPostId,
            'comment_type' => 'event_post',
            'content' => $validated['content'],
            'user_id' => $validated['user_id'],
        ]);

        return response()->json([
            'message' => 'Comment added successfully',
            'comment' => $comment,
        ], 201);
    }

    /**
     * Retrieve comments for a specific event post.
     */
    public function getComments($eventPostId): JsonResponse
    {
        $comments = Comment::where('event_post_id', $eventPostId)->get();

        if ($comments->isEmpty()) {
            return response()->json(['message' => 'No comments found for this event post'], 404);
        }

        return response()->json([
            'message' => 'Comments retrieved successfully',
            'comments' => $comments,
        ], 200);
    }

    /**
 * Delete a specific event post along with its related data.
 */
public function destroy($id): JsonResponse
{
    $eventPost = EventPost::find($id);

    if (!$eventPost) {
        return response()->json(['message' => 'Event post not found'], 404);
    }

    // Delete comments related to the event post
    Comment::where('event_post_id', $id)->delete();

    // Delete ratings related to the event post
    Rating::where('event_post_id', $id)->delete();

    // Delete the event post itself
    $eventPost->delete();

    return response()->json(['message' => 'Event post and its related data deleted successfully'], 200);
}

}
