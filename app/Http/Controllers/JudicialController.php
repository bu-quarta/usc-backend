<?php

namespace App\Http\Controllers;

use App\Models\Judicial;
use Illuminate\Http\Request;

class JudicialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judicials = Judicial::all(['id', 'name', 'position']);
        return response()->json($judicials);
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
    public function show(Judicial $judicial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Judicial $judicial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Judicial $judicial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Judicial $judicial)
    {
        //
    }
}
