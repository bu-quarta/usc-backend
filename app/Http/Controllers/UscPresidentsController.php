<?php

namespace App\Http\Controllers;

use App\Http\Resources\UscPresidentResource;
use App\Models\UscPresidents;
use Illuminate\Http\Request;

class UscPresidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presidents = UscPresidents::all();
        return UscPresidentResource::collection($presidents)->collection;
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
    public function show(UscPresidents $uscPresidents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UscPresidents $uscPresidents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UscPresidents $uscPresidents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UscPresidents $uscPresidents)
    {
        //
    }
}
