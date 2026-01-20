<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = Post::where('is_published', true)
            ->whereNull('parent_id')
            ->latest()
            ->take(3)
            ->get();

        return view('home', compact('latestPosts'));
    }
}
