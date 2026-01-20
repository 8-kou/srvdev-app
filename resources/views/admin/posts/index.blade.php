<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板投稿の管理 | 校内ポータル</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto p-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">掲示板投稿の管理</h1>
            <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-600 hover:text-gray-800 underline">戻る</a>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="text-left px-4 py-3">投稿日</th>
                        <th class="text-left px-4 py-3">投稿者</th>
                        <th class="text-left px-4 py-3">カテゴリ</th>
                        <th class="text-left px-4 py-3">タイトル/内容</th>
                        <th class="text-left px-4 py-3">返信</th>
                        <th class="text-left px-4 py-3">いいね</th>
                        <th class="text-right px-4 py-3">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr class="border-t">
                            <td class="px-4 py-3 text-gray-600">{{ $post->created_at->format('Y/m/d H:i') }}</td>
                            <td class="px-4 py-3">{{ $post->author_name }}</td>
                            <td class="px-4 py-3">{{ $post->category }}</td>
                            <td class="px-4 py-3">
                                <div class="font-semibold text-gray-800">{{ $post->title ?? 'タイトルなし' }}</div>
                                <div class="text-gray-600">{{ \Illuminate\Support\Str::limit($post->content, 60) }}</div>
                                @if($post->parent_id)
                                    <div class="text-xs text-orange-600 mt-1">返信投稿</div>
                                @endif
                            </td>
                            <td class="px-4 py-3">{{ $post->replies_count }}</td>
                            <td class="px-4 py-3">{{ $post->likes_count }}</td>
                            <td class="px-4 py-3 text-right">
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline" onsubmit="return confirm('削除しますか？');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">削除</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="border-t">
                            <td colspan="7" class="px-4 py-10 text-center text-gray-500">投稿がまだありません。</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
</body>
</html>
