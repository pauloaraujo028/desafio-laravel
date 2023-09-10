<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("home");

Route::get("/", [AuthManager::class, "login"])->name("login");
Route::post("/", [AuthManager::class, "loginPost"])->name("login.post");

Route::get("/register", [AuthManager::class, "register"])->name("register");
Route::post("/register", [AuthManager::class, "registerPost"])->name("register.post");

Route::get("/logout", [AuthManager::class, "logout"])->name("logout");

// Route::middleware('auth')->group(function () {
//     Route::get("/profile", [ProfileController::class, "profile"])->name('profile.page');
// });

Route::middleware('auth')->group(function () {
    Route::get("/profile", function () {
        return view('profile.page');
    })->name('profile.page');
});
