<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Store a new comment
    public function store(Request $request)
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return response()->json(['message' => 'User not authenticated.'], 401);
        }

        // Validate the request
        $validated = $request->validate([
            'content' => 'required|string|max:1000', // Validate comment content
            'comment_type' => 'required|string|in:news_update,event_post', // Validate comment type
            'entity_id' => 'required|integer', // Validate the related entity ID (e.g., news_update_id or event_post_id)
            'is_anonymous' => 'nullable|boolean',
        ]);

        // Create a new comment instance
        $comment = new Comment();
        $comment->content = $validated['content'];
        $comment->comment_type = $validated['comment_type'];
        $comment->is_anonymous = $validated['is_anonymous'] ?? false;

        // Link the comment to the appropriate entity based on comment_type
        if ($validated['comment_type'] === 'news_update') {
            $comment->news_update_id = $validated['entity_id'];
        } elseif ($validated['comment_type'] === 'event_post') {
            $comment->event_post_id = $validated['entity_id'];
        }

        $comment->user_id = Auth::id(); // Assign the authenticated user

        // Save the comment
        $comment->save();

        return response()->json(['message' => 'Comment created successfully!', 'comment' => $comment], 201);
    }

    // Fetch all comments (optionally, you can include pagination)
    public function index()
    {
        $comments = Comment::all(); // You can add pagination here if needed, like ->paginate(10)

        return response()->json(['comments' => $comments], 200);
    }

    // Show a specific comment
    public function show($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found.'], 404);
        }

        return response()->json(['comment' => $comment], 200);
    }

    // Delete a comment
    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found.'], 404);
        }

        // Check if the user is the owner of the comment
        if ($comment->user_id !== Auth::id()) {
            return response()->json(['message' => 'You are not authorized to delete this comment.'], 403);
        }

        // Delete the comment
        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully.'], 200);
    }

    // Like a comment
    // Like a comment
public function like($id)
{
    $comment = Comment::find($id);

    if (!$comment) {
        return response()->json(['message' => 'Comment not found.'], 404);
    }

    // Increment the likes count
    $comment->likes += 1;
    $comment->save();

    // Determine the parent model (NewsUpdate or EventPost)
    $parent = null;
    if ($comment->news_update_id) {
        $parent = NewsUpdate::find($comment->news_update_id);
    } elseif ($comment->event_post_id) {
        $parent = EventPost::find($comment->event_post_id);
    }

    return response()->json([
        'message' => 'Comment liked successfully!',
        'likes' => $comment->likes,
        'parent' => $parent,
    ], 200);
}

// Dislike a comment
public function dislike($id)
{
    $comment = Comment::find($id);

    if (!$comment) {
        return response()->json(['message' => 'Comment not found.'], 404);
    }

    // Increment the dislikes count
    $comment->dislikes += 1;
    $comment->save();

    // Determine the parent model (NewsUpdate or EventPost)
    $parent = null;
    if ($comment->news_update_id) {
        $parent = NewsUpdate::find($comment->news_update_id);
    } elseif ($comment->event_post_id) {
        $parent = EventPost::find($comment->event_post_id);
    }

    return response()->json([
        'message' => 'Comment disliked successfully!',
        'dislikes' => $comment->dislikes,
        'parent' => $parent,
    ], 200);
}
}
