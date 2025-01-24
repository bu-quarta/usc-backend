<?php

namespace App\Http\Controllers;

use App\Http\Resources\CscDirectoryResource;
use App\Http\Resources\UscAdviserResource;
use App\Http\Resources\UscResource;
use App\Models\CscDirectory;
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

        return response()->json([
            'uscs' => UscResource::collection($uscs),
            'usc_advisers' => UscAdviserResource::collection($usc_advisers),
            'cscs' => CscDirectoryResource::collection($cscs),
        ]);
    }
}
