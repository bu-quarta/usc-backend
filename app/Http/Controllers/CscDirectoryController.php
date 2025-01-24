<?php

namespace App\Http\Controllers;

use App\Http\Resources\CscDirectoryResource;
use App\Http\Resources\CscOfficialResource;
use App\Models\CscDirectory;
use App\Models\CscOfficial;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CscDirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CscDirectoryResource::collection(CscDirectory::all())->collection;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $csc_directory = CscDirectory::where('slug', $slug)->first();
        $csc_officials = CscOfficial::where('csc_directory_id', $csc_directory->id)->get();
        return response()->json([
            'csc' => new CscDirectoryResource($csc_directory),
            'csc_officials' => CscOfficialResource::collection($csc_officials)->collection
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CscDirectory $cscDirectory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CscDirectory $cscDirectory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CscDirectory $cscDirectory)
    {
        //
    }
}
