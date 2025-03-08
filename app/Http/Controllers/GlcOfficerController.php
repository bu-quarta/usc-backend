<?php

namespace App\Http\Controllers;

use App\Models\GlcOfficer;
use Illuminate\Http\Request;

class GlcOfficerController extends Controller
{
    public function index()
    {
        $glc_officers = GlcOfficer::get(['name', 'position']);
        return response()->json($glc_officers);
    }
}
