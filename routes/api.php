<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Comment;
use App\Models\Rating;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CscDirectoryController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\EventPostController;
use App\Http\Controllers\NewsUpdateController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UscAdviserController;
use App\Http\Controllers\UscOfficialController;
use App\Http\Controllers\UscPresidentsController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    $user = $request->user();

    return [
        'name' => $user->name,
        'email' => $user->email,
        'avatar' => $user->avatar,
        'roles' => $user->roles->pluck('name')->toArray(),
    ];
});

Route::get('home', [HomeController::class, 'index']);
Route::get('cscs', [CscDirectoryController::class, 'index']);
Route::get('cscs/{slug}', [CscDirectoryController::class, 'show']);
Route::get('developers', [DeveloperController::class, 'index']);
Route::get('usc-presidents', [UscPresidentsController::class, 'index']);
Route::get('usc-officials', [UscOfficialController::class, 'index']);
Route::get('usc-advisers', [UscAdviserController::class, 'index']);

// Route::post('/comments', [CommentController::class, 'store']);
Route::apiResource('comments', CommentController::class);

Route::post('comments/{id}/like', [CommentController::class, 'like']);

Route::post('comments/{id}/dislike', [CommentController::class, 'dislike']);

Route::get('event-posts/{slug}', [EventPostController::class, 'show']);
Route::apiResource('event-posts', EventPostController::class)->except(['show']);
Route::get('news-updates/{slug}', [NewsUpdateController::class, 'show']);
Route::apiResource('news-updates', NewsUpdateController::class)->except(['show']);
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
