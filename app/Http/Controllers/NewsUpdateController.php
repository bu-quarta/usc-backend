<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Http\Resources\NewsUpdateResource;
use App\Models\NewsUpdate;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsUpdateController extends Controller
{
    // Display all news updates (GET function)
    public function index()
    {
        return NewsUpdateResource::collection(
            NewsUpdate::orderBy('publish_date', 'desc')->get()
        )->collection;
    }

    // Store a new news update (POST function)
    public function store(Request $request)
    {
        // Validate the request with optional fields
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'nullable|in:published,draft',
            'by' => 'required|string|max:255',   // Added field
            'layout_by' => 'required|string|max:255',   // Added field
            'photo_by' => 'required|string|max:255',   // Added field
        ]);

        // Handle the image upload
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = Storage::url($request->file('image')->store('images/news_updates', 'public'));
        }

        // Create and save the news update
        NewsUpdate::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_path' => $imagePath,
            'status' => $validated['status'] ?? 'draft',
            'by' => $validated['by'],
            'layout_by' => $validated['layout_by'],
            'photo_by' => $validated['photo_by'],
        ]);

        return response()->noContent();
    }

    public function show($slug)
    {
        $newsUpdate = NewsUpdate::where('slug', $slug)->first();

        if (!$newsUpdate) {
            return response()->json(['message' => 'News update not found'], 404);
        }

        $otherNewsUpdates = NewsUpdate::where('slug', '!=', $slug)
            ->orderBy('publish_date', 'desc')
            ->limit(4)
            ->get();

        $comments = Comment::where('news_update_id', $newsUpdate->id)->orderBy('created_at', 'desc')->get();

        return response()->json([
            'news_update' => NewsUpdateResource::make($newsUpdate),
            'comments' => CommentResource::collection($comments),
            'other_news_updates' => NewsUpdateResource::collection($otherNewsUpdates),
        ]);
    }

    public function update(Request $request, NewsUpdate $newsUpdate)
    {
        // Validate the request with optional fields
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'nullable|in:published,draft',
            'by' => 'required|string|max:255',   // Added field
            'layout_by' => 'required|string|max:255',   // Added field
            'photo_by' => 'required|string|max:255',   // Added field
        ]);

        // Handle the image upload
        $imagePath = $newsUpdate->image_path;
        $imagePath = $newsUpdate->image_path;

        if ($request->hasFile('image')) {
            $imagePath = Storage::url($request->file('image')->store('images/news_updates', 'public'));
        }

        // Update the news update
        $newsUpdate->update([
            'image_path' => $imagePath,
            'title' => $validated['title'],
            'description' => $validated['description'],
            'status' => $validated['status'] ?? 'draft',
            'by' => $validated['by'],
            'layout_by' => $validated['layout_by'],
            'photo_by' => $validated['photo_by'],
        ]);

        return response()->noContent();
    }

    /**
     * Delete a specific news update along with its related comments.
     */
    public function destroy(NewsUpdate $newsUpdate)
    {
        $newsUpdate->delete();

        return response()->noContent();
    }
}
