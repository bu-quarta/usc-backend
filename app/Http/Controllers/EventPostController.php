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
        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'header' => 'required|string|max:255',
            'description' => 'required|string',
            'image_paths' => 'nullable|array',
            'image_paths.*' => 'nullable|string',
            'status' => 'nullable|in:UPCOMING,ONGOING,PAST', // Make status optional
        ]);
    
        // Return validation errors if any
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }
    
        // Set default value for status if not provided
        $status = $request->input('status', 'UPCOMING'); // Default to 'UPCOMING' if not provided
    
        // Create a new event post
        $eventPost = EventPost::create([
            'header' => $request->input('header'),
            'description' => $request->input('description'),
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
