<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function (){
   Route::get('login', [AuthController::class, 'create'])->name('login');
   Route::post('login', [AuthController::class, 'store']);
   Route::get('register', [RegisterController::class, 'create']);
   Route::post('register', [RegisterController::class, 'store']);
});

Route::middleware('auth')->group(function (){
    Route::view('settings', 'settings');
    Route::post('logout', [AuthController::class, 'destroy']);

    Route::post('employer', [EmployerController::class, 'store']);

    Route::get('jobs/create', [JobController::class, 'create']);

});
