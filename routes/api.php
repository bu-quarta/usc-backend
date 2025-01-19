<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Comment;
use App\Models\Rating;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventPostController;
use App\Http\Controllers\NewsUpdateController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DocumentController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    $user = $request->user();

    return [
        'name' => $user->name,
        'email' => $user->email,
        'avatar' => $user->avatar,
        'roles' => $user->roles->pluck('name')->toArray(),
    ];
});

Route::get('/comments', function (Request $request) {
    return Comment::all();
});

// Route to create a comment
Route::post('/comments', [CommentController::class, 'store']);

Route::post('comments/{id}/like', [CommentController::class, 'like']);

Route::post('comments/{id}/dislike', [CommentController::class, 'dislike']);

Route::apiResource('event-posts', EventPostController::class);
Route::apiResource('news-updates', NewsUpdateController::class);
Route::apiResource('reports', ReportController::class);

// List all documents
Route::get('documents', [DocumentController::class, 'index']);

// Create a new document
Route::post('documents', [DocumentController::class, 'store']);

// Show a specific document
Route::get('documents/{id}', [DocumentController::class, 'show']);

// Update the status of a document
Route::put('documents/{id}/status', [DocumentController::class, 'update']);

// Delete a document
Route::delete('documents/{id}', [DocumentController::class, 'destroy']);
