<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// routes/api.php
use App\Http\Controllers\ToDoController;

Route::get('/todos', [ToDoController::class, 'index']);
Route::post('/todos', [ToDoController::class, 'store']);
Route::put('/todos/{id}', [ToDoController::class, 'update']);
Route::delete('/todos/{id}', [ToDoController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
