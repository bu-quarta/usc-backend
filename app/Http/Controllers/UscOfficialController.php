<?php

namespace App\Http\Controllers;

use App\Http\Resources\UscResource;
use App\Models\UscOfficial;
use Illuminate\Http\Request;

class UscOfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usc_officials = UscOfficial::all();
        return UscResource::collection($usc_officials)->collection;
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
    public function show(UscOfficial $uscOfficial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UscOfficial $uscOfficial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UscOfficial $uscOfficial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UscOfficial $uscOfficial)
    {
        //
    }
}
