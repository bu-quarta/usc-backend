<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Dislike;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    // Fetch all comments (optionally, you can include pagination)
    public function index()
    {
        return CommentResource::collection(
            Comment::with(['user', 'likes', 'dislikes'])
                ->latest()
                ->get()
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
        $comment = Comment::findOrFail($id);

        // Undo any active dislike
        Dislike::where('user_id', Auth::id())
            ->where(
                'comment_id',
                $comment->id
            )
            ->where('is_active', true)
            ->update(['is_active' => false]);

        // Add or update the like
        Like::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'comment_id' => $comment->id
            ],
            ['is_active' => true]
        );

        return response()->noContent();
    }

    // Dislike a comment
    public function dislike($id)
    {
        $comment = Comment::findOrFail($id);

        // Undo any active like
        Like::where('user_id', Auth::id())
            ->where('comment_id', $comment->id)
            ->where('is_active', true)
            ->update(['is_active' => false]);

        // Add or update the dislike
        Dislike::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'comment_id' => $comment->id
            ],
            ['is_active' => true]
        );

        return response()->noContent();
    }


    public function undoLike($id)
    {
        $comment = Comment::findOrfail($id);

        $like = Like::where('user_id', Auth::id())->where('comment_id', $comment->id)->first();
        if ($like) {
            $like->update(['is_active' => false]);
            return response()->json(['message' => 'Like undone!']);
        }

        return response()->noContent();
    }

    public function undoDislike($id)
    {
        $comment = Comment::findOrfail($id);

        $dislike = Dislike::where('user_id', Auth::id())->where('comment_id', $comment->id)->first();
        if ($dislike) {
            $dislike->update(['is_active' => false]);
            return response()->json(['message' => 'Dislike undone!']);
        }

        return response()->noContent();
    }
}
