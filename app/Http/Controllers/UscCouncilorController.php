<?php

namespace App\Http\Controllers;

use App\Models\UscCouncilor;
use Illuminate\Http\Request;

class UscCouncilorController extends Controller
{
    public function index()
    {
        $councilors = UscCouncilor::all()->groupBy('type')->map(function ($group, $type) {
            return [
                'type' => $type,
                'members' => $group->map(function ($councilor) {
                    return [
                        'name' => $councilor->name,
                        'college' => $councilor->college
                    ];
                })->values()
            ];
        })->values();

        return response()->json($councilors);
    }
}
