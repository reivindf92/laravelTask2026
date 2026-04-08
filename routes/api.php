<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/tasks', [TestController::class, 'store']);
Route::get('/tasks', [TestController::class, 'index']);
Route::put('/tasks/{id}', [TestController::class, 'update']);
Route::delete('/tasks/{id}', [TestController::class, 'destroy']);