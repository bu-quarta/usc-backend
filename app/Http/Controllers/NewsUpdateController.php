<?php

namespace App\Http\Controllers;

use App\Models\NewsUpdate;
use App\Models\Comment;
use Illuminate\Http\Request;

class NewsUpdateController extends Controller
{
    // Store a new news update (POST function)
    public function store(Request $request)
    {
        try {
            // Validate the request with optional fields
            $validated = $request->validate([
                'title' => 'nullable|string|max:255', // Title is optional
                'description' => 'nullable|string', // Description is optional
                'status' => 'nullable|in:published,draft', // Status is optional
            ]);
    
            // Create and save the news update
            $newsUpdate = NewsUpdate::create([
                'title' => $validated['title'] ?? 'Default Title', // Use default value if null
                'description' => $validated['description'] ?? 'Default Description', // Default value
                'status' => $validated['status'] ?? 'draft', // Default status
            ]);
    
            // Return a success response
            return response()->json([
                'message' => 'News update created successfully!',
                'data' => $newsUpdate
            ], 201);
        } catch (\Exception $e) {
            // Log the error and return a failure response
            \Log::error('Error creating news update: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to create news update.',
                'error' => $e->getMessage()
            ], 500);
        }
    }    

    // Display all news updates (GET function)
    public function index()
    {
        // Retrieve all published news updates
        $newsUpdates = NewsUpdate::where('status', 'published')->get();

        // Return the response
        return response()->json([
            'message' => 'News updates retrieved successfully!',
            'data' => $newsUpdates
        ], 200);
    }

    public function show($id)
{
    // Find the specific news update by ID along with its comments
    $newsUpdate = NewsUpdate::with('comments')->where('update_id', $id)->first();

    if (!$newsUpdate) {
        return response()->json([
            'message' => 'News update not found!',
        ], 404);
    }

    // Get the other recent news updates
    $otherNewsUpdates = NewsUpdate::where('status', 'published')
                                  ->where('update_id', '!=', $id) // Exclude the current news update
                                  ->latest()
                                  ->take(5) // Limit the number of recent news
                                  ->get();

    // Format the description for the "Read More" label
    $descriptionPreview = substr($newsUpdate->description, 0, 100); // Preview the first 100 characters

    return response()->json([
        'message' => 'News update retrieved successfully!',
        'data' => [
            'newsUpdate' => $newsUpdate,
            'comments' => $newsUpdate->comments,
            'otherNewsUpdates' => $otherNewsUpdates
        ],
    ], 200);
}

    // Add a comment to a news update
    public function addComment(Request $request, $newsUpdateId)
    {
        // Validate the request
        $validated = $request->validate([
            'content' => 'required|string|max:1000', // Validate the comment content
            'is_anonymous' => 'nullable|boolean',
        ]);

        // Find the news update
        $newsUpdate = NewsUpdate::find($newsUpdateId);

        if (!$newsUpdate) {
            return response()->json(['message' => 'News update not found!'], 404);
        }

        // Create and save the comment
        $comment = new Comment();
        $comment->content = $validated['content'];
        $comment->comment_type = 'news_update'; // Define the type
        $comment->news_update_id = $newsUpdateId; // Link the comment to the news update
        $comment->is_anonymous = $validated['is_anonymous'] ?? false;
        $comment->user_id = Auth::id();
        $comment->save();

        return response()->json([
            'message' => 'Comment added successfully!',
            'data' => $comment
        ], 201);
    }

    /**
     * Delete a specific news update along with its related comments.
     */
    public function destroy($id)
    {
        // Find the news update by ID
        $newsUpdate = NewsUpdate::find($id);

        if (!$newsUpdate) {
            return response()->json(['message' => 'News update not found!'], 404);
        }

        // Delete related comments
        Comment::where('news_update_id', $id)->delete();

        // Delete the news update itself
        $newsUpdate->delete();

        return response()->json(['message' => 'News update and its related comments deleted successfully!'], 200);
    }
}