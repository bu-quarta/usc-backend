<?php

namespace App\Http\Controllers;

use App\Http\Resources\CscDirectoryResource;
use App\Http\Resources\EventPostResource;
use App\Http\Resources\NewsUpdateResource;
use App\Http\Resources\UscAdviserResource;
use App\Http\Resources\UscResource;
use App\Models\CscDirectory;
use App\Models\EventPost;
use App\Models\NewsUpdate;
use App\Models\UscAdviser;
use App\Models\UscOfficial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $uscs = UscOfficial::all();
        $usc_advisers = UscAdviser::all();
        $cscs = CscDirectory::all();
        $events = EventPost::latest()->take(6)->get();
        $news_updates = NewsUpdate::latest()->take(5)->get();

        return response()->json([
            'uscs' => UscResource::collection($uscs),
            'usc_advisers' => UscAdviserResource::collection($usc_advisers),
            'cscs' => CscDirectoryResource::collection($cscs),
            'events' => EventPostResource::collection($events),
            'news_updates' => NewsUpdateResource::collection($news_updates),
        ]);
    }
}
