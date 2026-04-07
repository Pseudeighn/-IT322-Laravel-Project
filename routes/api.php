<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me',      [AuthController::class, 'me']);

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', fn() => response()->json(['message' => 'Welcome Admin']));
    });

    Route::middleware('role:admin,chairman')->group(function () {
        Route::get('/chairman/reports', fn() => response()->json(['message' => 'Chairman Reports']));
    });

    Route::middleware('role:admin,teacher')->group(function () {
        Route::get('/teacher/classes', fn() => response()->json(['message' => 'Teacher Classes']));
    });

    Route::middleware('role:admin,student')->group(function () {
        Route::get('/student/grades', fn() => response()->json(['message' => 'Student Grades']));
    });
});