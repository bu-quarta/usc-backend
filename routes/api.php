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
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UscAdviserController;
use App\Http\Controllers\UscOfficialController;
use App\Http\Controllers\UscPresidentsController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\GlcOfficerController;
use App\Http\Controllers\GlcVotingNonVotingController;
use App\Http\Controllers\JudicialController;
use App\Http\Controllers\UscCouncilorController;

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
Route::get('usc-councilors', [UscCouncilorController::class, 'index']);
Route::get('glc-officers', [GlcOfficerController::class, 'index']);
Route::get('comments', [CommentController::class, 'index']);

Route::get('event-posts/{slug}', [EventPostController::class, 'show']);
Route::apiResource('event-posts', EventPostController::class)->only(['index']);
Route::get('news-updates/{slug}', [NewsUpdateController::class, 'show']);
Route::apiResource('news-updates', NewsUpdateController::class)->only(['index']);
Route::apiResource('reports', ReportController::class)->only(['index']);
Route::get('faqs', [FaqController::class, 'index']);
Route::get('judicials', [JudicialController::class, 'index']);
Route::get('glc-members', [GlcVotingNonVotingController::class, 'index']);
Route::post('documents/show', [DocumentController::class, 'show']);

Route::apiResource('event-posts', EventPostController::class)->except(['show']);
Route::apiResource('news-updates', NewsUpdateController::class)->except(['show']);

Route::middleware(['auth'])->group(function () {
    Route::post('comments', [CommentController::class, 'store']);
    Route::post('comments/{id}/like', [CommentController::class, 'like']);
    Route::post('comments/{id}/dislike', [CommentController::class, 'dislike']);
    Route::post('comments/{id}/unlike', [CommentController::class, 'undoLike']);
    Route::post('comments/{id}/undislike', [CommentController::class, 'undoDislike']);
});

Route::middleware(['auth', 'role:pio'])->group(function () {
    Route::prefix('pio')->group(function () {
        Route::get('event-posts/{slug}', [EventPostController::class, 'show']);
        Route::apiResource('event-posts', EventPostController::class)->except(['show']);
        Route::get('news-updates/{slug}', [NewsUpdateController::class, 'show']);
        Route::apiResource('news-updates', NewsUpdateController::class)->except(['show']);
        Route::apiResource('reports', ReportController::class);
    });
});

Route::middleware(['auth', 'role:ivc'])->group(function () {
    Route::get('documents', [DocumentController::class, 'index']);
    Route::post('documents', [DocumentController::class, 'store']);
    Route::put('documents/{id}/status', [DocumentController::class, 'update']);
    Route::delete('documents/{id}', [DocumentController::class, 'destroy']);
});

Route::middleware(['auth', 'role:auditor'])->group(function () {
    Route::prefix('evaluations')->group(function () {
        Route::get('/', [EvaluationController::class, 'index']); // Get all evaluations
        Route::put('/{evaluation}', [EvaluationController::class, 'update']); // Update an evaluation
        Route::post('/search', [EvaluationController::class, 'search']); // Search evaluations by event title
    });
});

Route::post('/generate-report', [ReportController::class, 'generateReport']);

Route::post('activity-log', [ActivityLogController::class, 'store']);
// Activity Log APIs
Route::get('activity-log/public-relations', [ActivityLogController::class, 'publicRelations']);
Route::get('activity-log/audit-reports', [ActivityLogController::class, 'auditReports']);
Route::get('activity-log/file-tracking', [ActivityLogController::class, 'fileTracking']);
