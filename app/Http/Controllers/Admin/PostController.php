<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::withCount(['replies', 'likes'])
            ->latest()
            ->paginate(20);

        return view('admin.posts.index', compact('posts'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
