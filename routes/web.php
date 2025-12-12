<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PageController;

// トップページ
Route::get('/', [HomeController::class, 'index'])->name('home');

// 掲示板
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{id}/reply', [PostController::class, 'storeReply'])->name('posts.storeReply');
Route::post('/posts/{id}/like', [PostController::class, 'toggleLike'])->name('posts.toggleLike');

// 先生紹介
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');

// スケジュール
Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
Route::get('/schedules/calendar', [ScheduleController::class, 'calendar']); // カレンダー表示
Route::get('/events', [ScheduleController::class, 'events']); // カレンダー用API
Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
Route::get('/schedules/{id}', [ScheduleController::class, 'show'])->name('schedules.show');
Route::get('/schedules/{id}/edit', [ScheduleController::class, 'edit'])->name('schedules.edit');
Route::put('/schedules/{id}', [ScheduleController::class, 'update'])->name('schedules.update');
Route::delete('/schedules/{id}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');


// 校内マップ（静的ページ）
Route::get('/map', [PageController::class, 'map'])->name('map');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// 管理者用ログイン・ログアウトルート
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // 認証されていないユーザー向け
    Route::middleware('guest')->group(function () {
        Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
    });

    // 認証済みのユーザー向け
    Route::middleware('auth')->group(function () {
        Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');

        // 管理画面トップページ
        Route::get('/', function () {
            return view('admin.dashboard'); // ステップ3で作成
        })->name('dashboard');
    });
});