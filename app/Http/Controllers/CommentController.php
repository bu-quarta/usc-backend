<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Fetch all comments (optionally, you can include pagination)
    public function index()
    {
        return CommentResource::collection(
            Comment::orderBy('created_at', 'desc')->get()
        )->collection;
    }

    // Store a new comment
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'content' => 'required|string|max:1000', // Validate comment content
            'comment_type' => 'required|string|in:news_update,event_post', // Validate comment type
            'comment_type_id' => 'required|integer', // Validate the related entity ID (e.g., news_update_id or event_post_id)
            'is_anonymous' => 'boolean', // Validate the is_anonymous field
        ]);

        Comment::create([
            'content' => $validated['content'],
            'event_post_id' => $validated['comment_type'] === 'event_post' ? $validated['comment_type_id'] : null,
            'news_update_id' => $validated['comment_type'] === 'news_update' ? $validated['comment_type_id'] : null,
            'user_id' => $validated['is_anonymous'] ? null : Auth::id(),
        ]);

        return response()->noContent();
    }

    // Delete a comment
    public function destroy(Comment $comment)
    {
        // Check if the user is the owner of the comment
        if ($comment->user_id !== Auth::id()) {
            return response()->json(['message' => 'You are not authorized to delete this comment.'], 403);
        }
        $comment->delete();
        return response()->noContent();
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
