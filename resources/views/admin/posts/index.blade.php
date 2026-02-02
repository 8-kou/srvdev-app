<x-admin-layout title="掲示板投稿の管理">
    <x-slot:actions>
        <a href="{{ route('admin.dashboard') }}" class="text-sm text-slate-300 hover:text-white underline">戻る</a>
    </x-slot:actions>

    <div class="bg-slate-900/70 border border-slate-800 rounded-2xl shadow-xl overflow-hidden">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-950/70 text-slate-300">
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
                    <tr class="border-t border-slate-800/70">
                        <td class="px-4 py-3 text-slate-400">{{ $post->created_at->format('Y/m/d H:i') }}</td>
                        <td class="px-4 py-3 text-slate-100">{{ $post->author_name }}</td>
                        <td class="px-4 py-3 text-slate-200">{{ $post->category }}</td>
                        <td class="px-4 py-3">
                            <div class="font-semibold text-slate-100">{{ $post->title ?? 'タイトルなし' }}</div>
                            <div class="text-slate-400">{{ \Illuminate\Support\Str::limit($post->content, 60) }}</div>
                            @if($post->parent_id)
                                <div class="text-xs text-amber-300 mt-1">返信投稿</div>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-slate-200">{{ $post->replies_count }}</td>
                        <td class="px-4 py-3 text-slate-200">{{ $post->likes_count }}</td>
                        <td class="px-4 py-3 text-right">
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline" onsubmit="return confirm('削除しますか？');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-300 hover:text-rose-200">削除</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="border-t border-slate-800/70">
                        <td colspan="7" class="px-4 py-10 text-center text-slate-400">投稿がまだありません。</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</x-admin-layout>
