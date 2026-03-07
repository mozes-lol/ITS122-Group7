<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoachController;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
});

/*
|--------------------------------------------------------------------------
| Coach Routes
|--------------------------------------------------------------------------
*/
Route::prefix('coach')->group(function () {
    Route::get('/dashboard', [CoachController::class, 'dashboard']);
});

/*
|--------------------------------------------------------------------------
| Member Routes
|--------------------------------------------------------------------------
*/
Route::prefix('member')->group(function () {
   Route::get('/dashboard', function () { return view('member.dashboard'); });
    Route::get('/history', function () { return view('member.history'); });
    Route::get('/create-log', function () { return view('member.create_log'); });
    Route::get('/profile', function () { return view('member.profile'); });
    Route::get('/achievements', function () { return view('member.achievements'); });
});
