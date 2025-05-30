<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;
use App\Models\EventPost;

class EvaluationController extends Controller
{
    public function index()
    {
        $events = EventPost::latest()->get()->map(function ($event) {
            return [
                'id' => $event->evaluation_id,
                'event_post_id' => $event->event_post_id,
                'image_path' => $event->image_path,
                'header' => $event->header,
                'status' => $event->status,
                'evaluation_form' => $event->evaluation_form,
            ];
        });

        return response()->json($events);
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:event_posts,id',
            'evaluation_form' => 'required|string',
        ]);

        $evaluation = Evaluation::create($request->only(['event_id', 'evaluation_form']));
    }

    public function show(Evaluation $evaluation)
    {
        $evaluation->load(['event' => function ($query) {
            $query->select('id', 'image_path', 'header', 'status');
        }]);
    }

    public function update(Request $request, Evaluation $evaluation)
    {
        $request->validate([
            'event_post_id' => 'required|exists:event_posts,id',
            'evaluation_form' => 'sometimes',
        ]);

        $evaluation->update([
            'event_post_id' => $request->input('event_post_id'),
            'evaluation_form' => $request->input('evaluation_form'),
        ]);

        return response()->noContent();
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

        // Fetch only the required fields from matching events
        $matchingEvents = EventPost::where('header', 'LIKE', "%" . $request->input('query') . "%")
            ->get(['image_path', 'header', 'status']);

        if ($matchingEvents->isEmpty()) {
            return response()->json([
                'message' => 'No results found',
                'query' => $request->input('query'),
            ], 404);
        }
    }
}
