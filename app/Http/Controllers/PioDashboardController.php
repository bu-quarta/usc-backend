<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPost;
use App\Models\NewsUpdate;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\PioDashboardResource;

class PioDashboardController extends Controller
{
    public function index()
    {
        $totalEvents = EventPost::count();
        $totalNews = NewsUpdate::count();
        $totalPosts = $totalEvents + $totalNews;
        $totalComments = Comment::count();

        // Count total reactions (likes + dislikes) from all comments
        $totalReactions = DB::table('likes')->count() + DB::table('dislikes')->count();

        // Fetch News Updates with comments and reactions count
        $newsUpdates = NewsUpdate::get()->map(function ($news) {
            $news->comments_count = Comment::where('news_update_id', $news->id)->count();

            $likes = DB::table('likes')
                ->whereIn('comment_id', Comment::where('news_update_id', $news->id)->pluck('id'))
                ->count();
            
            $dislikes = DB::table('dislikes')
                ->whereIn('comment_id', Comment::where('news_update_id', $news->id)->pluck('id'))
                ->count();

            $news->reactions_count = $likes + $dislikes;

            return $news;
        });

        // Fetch Event Posts with comments and reactions count
        $eventPosts = EventPost::get()->map(function ($event) {
            $event->comments_count = Comment::where('event_post_id', $event->id)->count();

            $likes = DB::table('likes')
                ->whereIn('comment_id', Comment::where('event_post_id', $event->id)->pluck('id'))
                ->count();
            
            $dislikes = DB::table('dislikes')
                ->whereIn('comment_id', Comment::where('event_post_id', $event->id)->pluck('id'))
                ->count();

            $event->reactions_count = $likes + $dislikes;

            return $event;
        });

        // Convert to arrays before merging
        $mergedPosts = collect($newsUpdates->toArray())->merge($eventPosts->toArray());

        // Get top 3 most popular posts based on comments and reactions count
        $popularPosts = $mergedPosts->sortByDesc(function ($post) {
            return $post['comments_count'] + $post['reactions_count'];
        })->take(3)->values();

        // Fetch upcoming events (only from EventPost)
        $upcomingEvents = EventPost::where('date_time', '>', now())
            ->orderBy('date_time')
            ->take(2)
            ->get();

        // Prepare response data
        $data = [
            'totalPosts' => $totalPosts,
            'totalEvents' => $totalEvents,
            'totalNews' => $totalNews,
            'totalComments' => $totalComments,
            'totalReactions' => $totalReactions,
            'popularPosts' => $popularPosts,
            'upcomingEvents' => $upcomingEvents,
        ];

        return new PioDashboardResource($data);
    }
}
