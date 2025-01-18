<?php

namespace App\Http\Controllers;

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
            'title' => 'required|string|max:255', // Title is optional
            'description' => 'required|string', // Description is optional
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image is optional
            'status' => 'nullable|in:published,draft', // Status is optional
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
        ]);

        return response()->noContent();
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

    public function update(Request $request, NewsUpdate $newsUpdate)
    {
        // Validate the request with optional fields
        $validated = $request->validate([
            'title' => 'required|string|max:255', // Title is optional
            'description' => 'required|string', // Description is optional
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image is optional
            'status' => 'nullable|in:published,draft', // Status is optional
        ]);

        // Handle the image upload
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = Storage::url($request->file('image')->store('images/news_updates', 'public'));
        } else {
            $imagePath = $newsUpdate->image_path;
        }

        // Update the news update
        $newsUpdate->update([
            'image_path' => $imagePath,
            'title' => $validated['title'],
            'description' => $validated['description'],
            'status' => $validated['status'] ?? 'draft',
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
