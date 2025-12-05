<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        // 最新の公開記事を3件取得
        $latestPosts = Post::where('is_published', true)
                        ->latest()
                        ->take(3)
                        ->get();

        return view('home', compact('latestPosts'));
    }
}