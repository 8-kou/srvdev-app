<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PageController;

// Top page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{id}/reply', [PostController::class, 'storeReply'])->name('posts.storeReply');
Route::post('/posts/{id}/like', [PostController::class, 'toggleLike'])->name('posts.toggleLike');

// Teachers
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');

// Schedules (public view only)
Route::get('/schedule', [ScheduleController::class, 'index']);
Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
Route::get('/schedules/calendar', [ScheduleController::class, 'calendar']);
Route::get('/events', [ScheduleController::class, 'events']);
Route::get('/schedules/{id}', [ScheduleController::class, 'show'])->name('schedules.show');

// Map
Route::get('/map', [PageController::class, 'map'])->name('map');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
        Route::get('register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'showRegisterForm'])->name('register');
        Route::post('register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'register']);
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('teachers', App\Http\Controllers\Admin\TeacherController::class)
            ->except(['show']);

        Route::resource('posts', App\Http\Controllers\Admin\PostController::class)
            ->only(['index', 'destroy']);

        Route::resource('schedules', App\Http\Controllers\Admin\ScheduleController::class)
            ->except(['show']);
    });
});
