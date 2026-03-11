<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware('role:admin')
    ->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard']);

});


/*
|--------------------------------------------------------------------------
| Coach Routes
|--------------------------------------------------------------------------
*/

Route::prefix('coach')
    ->middleware('role:coach')
    ->group(function () {

        Route::get('/dashboard', [CoachController::class, 'dashboard']);

});


/*
|--------------------------------------------------------------------------
| Member Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\MemberController;

Route::prefix('member')
    ->middleware('role:member')
    ->group(function () {

        Route::get('/dashboard', [MemberController::class, 'dashboard']);
        Route::get('/history', [MemberController::class, 'history']);
        Route::get('/create-log', [MemberController::class, 'createLog']);
        Route::get('/profile', [MemberController::class, 'profile']);
        Route::get('/achievements', [MemberController::class, 'achievements']);

});