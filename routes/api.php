<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FeedbackController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/feedbacks', [FeedbackController::class, 'index']);
Route::get('/feedbacks/{feedback_id}', [FeedbackController::class, 'show']);
Route::post('/feedbacks', [FeedbackController::class, 'store']);
Route::put('/feedbacks/{feedback_id}', [FeedbackController::class, 'update']);
Route::delete('/feedbacks/{feedback_id}', [FeedbackController::class, 'delete']);