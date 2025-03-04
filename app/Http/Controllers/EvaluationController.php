<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function index()
    {
        $evaluations = Evaluation::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|string',
            'title' => 'required|string',
            'status' => 'required|string',
            'evaluation_form' => 'required|string',
        ]);

        $evaluation = Evaluation::create($request->all());
    }

    public function show(Evaluation $evaluation)
    {
        
    }

    public function update(Request $request, Evaluation $evaluation)
    {
        $request->validate([
            'image' => 'sometimes|string',
            'title' => 'sometimes|string',
            'evaluation_form' => 'sometimes|string',
            'status' => 'sometimes|string',
        ]);

        $evaluation->update($request->all());
    }

    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return response()->json(null, 204);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string',
        ]);

        $searchQuery = $request->input('query');

        $evaluations = Evaluation::where('title', 'LIKE', "%{$searchQuery}%")->get();
    }
}