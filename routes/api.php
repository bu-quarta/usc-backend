<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventPostController;
use App\Http\Controllers\CommentController;
use App\Models\Comment;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Route to create a comment
Route::middleware('auth:sanctum')->post('/comments', [CommentController::class, 'store']);

Route::get('/comments', function (Request $request) {
    return Comment::all();
});

// GET route to retrieve event posts
Route::get('/event-posts', [EventPostController::class, 'index']);

// POST route to create a new event post
Route::post('/event-posts', [EventPostController::class, 'store']);