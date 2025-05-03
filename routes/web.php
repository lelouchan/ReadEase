<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;

// Home Route
Route::get('/home', function () {
    return view('home');
});

// About Route
Route::get('/about', function () {
    return view('about');
});

Route::get('/viewreports', function () {
    return view('viewreports');
});



// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/readinglanguage', function () {
        return view('readinglanguage');
    });

    Route::get('/english', function () {
        return view('english');
    });

    Route::get('/filipino', function () {
        return view('filipino');
    });

    Route::post('/search-student', [StudentController::class, 'search']);
});

// Public Routes
Route::get('/about', function () {
    return view('about');
});

Route::get('/viewreports', function () {
    return view('viewreports');
});

Route::get('/log', function () {
    return view('log'); // This is your homepage
});


