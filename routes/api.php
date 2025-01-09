<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Comment;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/comments', function (Request $request) {
    return Comment::all();
});
