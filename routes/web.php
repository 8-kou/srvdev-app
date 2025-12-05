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

// 先生紹介
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');

// スケジュール
Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');

// 校内マップ（静的ページ）
Route::get('/map', [PageController::class, 'map'])->name('map');