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
            'user_id' => 'nullable|exists:users,id', // Validate user ID if provided
            'comment_id' => 'nullable|exists:comments,id', // Validate the parent comment ID if replying
        ]);

        // Create a new comment
        $comment = new Comment();
        $comment->content = $validated['content'];
        $comment->user_id = Auth::id(); // Assuming the user is authenticated
        $comment->comment_id = $validated['comment_id'] ?? null; // If replying, add the parent comment ID
        
        // Save the comment
        $comment->save();

        // Return response with created comment data
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
    public function like($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found.'], 404);
        }

        // Increment the likes count
        $comment->likes += 1;
        $comment->save();

        return response()->json(['message' => 'Comment liked successfully!', 'likes' => $comment->likes], 200);
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

        return response()->json(['message' => 'Comment disliked successfully!', 'dislikes' => $comment->dislikes], 200);
    }
}
