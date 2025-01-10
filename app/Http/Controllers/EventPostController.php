<?php

namespace App\Http\Controllers;

use App\Models\EventPost;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class EventPostController extends Controller
{
    /**
     * Get all event posts.
     */
    public function index(): JsonResponse
    {
        // Retrieve all event posts
        $eventPosts = EventPost::all();

        // Return the event posts as a JSON response
        return response()->json($eventPosts);
    }

    /**
     * Store a newly created event post.
     */
    public function store(Request $request): JsonResponse
{
    // Set default values for missing fields
    $header = $request->input('header', 'Default Event Header'); // Default header
    $description = $request->input('description', 'Default Event Description'); // Default description
    $status = $request->input('status', 'UPCOMING'); // Default status

    // Create a new event post
    $eventPost = EventPost::create([
        'header' => $header,
        'description' => $description,
        'image_paths' => $request->input('image_paths', []),
        'status' => $status,
    ]);

    // Return the created event post as a JSON response
    return response()->json([
        'message' => 'Event post created successfully',
        'event_post' => $eventPost
    ], 201);
}
}