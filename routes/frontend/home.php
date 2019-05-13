<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AssessmentController;
use App\Http\Controllers\Frontend\HiringController;
use App\Http\Controllers\Frontend\TrainingController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

// Home
Route::get('/', [HomeController::class, 'index'])->name('index');

// About Us
Route::get('aboutus', [AboutController::class, 'index'])->name('aboutus');

// Assesment
Route::get('assessment', [AssessmentController::class, 'index'])->name('assessment');

// Services
Route::get('hiring', [HiringController::class, 'index'])->name('hiring');
Route::get('training', [TrainingController::class, 'index'])->name('training');

// Blog
Route::get('blog', [BlogController::class, 'index'])->name('blog');

// Contact
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
