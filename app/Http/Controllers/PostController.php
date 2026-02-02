<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->query('sort', 'new');

        $postsQuery = Post::where('is_published', true)
            ->whereNull('parent_id')
            ->withCount(['likes', 'replies']);

        switch ($sort) {
            case 'old':
                $postsQuery->orderBy('created_at', 'asc');
                break;
            case 'likes':
                $postsQuery->orderBy('likes_count', 'desc')->orderBy('created_at', 'desc');
                break;
            case 'replies':
                $postsQuery->orderBy('replies_count', 'desc')->orderBy('created_at', 'desc');
                break;
            case 'new':
            default:
                $postsQuery->orderBy('created_at', 'desc');
                break;
        }

        $posts = $postsQuery->paginate(10)->withQueryString();

        return view('posts.index', compact('posts', 'sort'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_name' => 'required|max:20',
            'title' => 'nullable|max:50',
            'content' => 'required|max:1000',
            'category' => 'required',
        ]);

        Post::create($validated);

        return redirect()->route('posts.index');
    }

    public function storeReply(Request $request, $postId)
    {
        $validated = $request->validate([
            'author_name' => 'required|max:20',
            'content' => 'required|max:1000',
        ]);

        $parentPost = Post::findOrFail($postId);

        $validated['parent_id'] = $postId;
        $validated['is_published'] = true;
        $validated['category'] = $parentPost->category;

        Post::create($validated);

        return redirect()->route('posts.show', $postId);
    }

    public function toggleLike($id)
    {
        $post = Post::findOrFail($id);
        $ip = request()->ip();

        $like = Like::where('post_id', $id)->where('ip_address', $ip)->first();

        if ($like) {
            $like->delete();
        } else {
            Like::create(['post_id' => $id, 'ip_address' => $ip]);
        }

        return back();
    }

    public function show($id)
    {
        $post = Post::with(['replies.likes', 'likes'])->findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
