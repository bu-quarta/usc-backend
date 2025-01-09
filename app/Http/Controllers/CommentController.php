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
        $comment->save(); // Save the comment

        return response()->json(['message' => 'Comment created successfully!', 'comment' => $comment], 201);
    }
}
