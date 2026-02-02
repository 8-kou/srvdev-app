<x-layout title="掲示板" video="posts.mp4">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-6">
        <div class="inline-block bg-white/75 backdrop-blur-sm px-4 py-3 rounded-xl shadow-md">
            <h2 class="text-2xl font-bold text-gray-800">📋 掲示板</h2>
        </div>
        <div class="flex flex-col sm:flex-row gap-3 sm:items-center">
            <form method="GET" action="{{ route('posts.index') }}" class="flex items-center gap-2">
                <label for="sort" class="text-sm text-gray-600">並び替え</label>
                <select id="sort" name="sort" class="border border-gray-300 rounded-lg px-3 py-2 text-sm bg-white">
                    <option value="new" {{ ($sort ?? 'new') === 'new' ? 'selected' : '' }}>投稿日が新しい順</option>
                    <option value="old" {{ ($sort ?? 'new') === 'old' ? 'selected' : '' }}>投稿日が古い順</option>
                    <option value="likes" {{ ($sort ?? 'new') === 'likes' ? 'selected' : '' }}>いいね順</option>
                    <option value="replies" {{ ($sort ?? 'new') === 'replies' ? 'selected' : '' }}>返信が多い順</option>
                </select>
                <button type="submit" class="bg-gray-700 text-white text-sm px-3 py-2 rounded-lg hover:bg-gray-800">適用</button>
            </form>
            <a href="{{ route('posts.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full shadow-lg transition transform hover:scale-105 flex items-center justify-center">
                <span class="text-xl mr-1">+</span> 投稿する
            </a>
        </div>
    </div>

    <div class="space-y-6">
        @foreach($posts as $post)
            <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100 hover:shadow-md transition">
                <div class="flex justify-between items-start mb-3">
                    <div class="flex items-center space-x-3">
                        <div class="bg-gradient-to-br from-blue-400 to-blue-600 rounded-full w-10 h-10 flex items-center justify-center text-white font-bold text-lg shadow">
                            {{ substr($post->author_name, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900">{{ $post->author_name }}</p>
                            <p class="text-xs text-gray-500">{{ $post->created_at->format('Y/m/d H:i') }}</p>
                        </div>
                    </div>
                    <span class="bg-blue-50 text-blue-700 text-xs px-3 py-1 rounded-full font-medium border border-blue-100">
                        {{ $post->category }}
                    </span>
                </div>

                @if($post->title)
                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                        <a href="{{ route('posts.show', $post->id) }}" class="hover:text-blue-600 transition">{{ $post->title }}</a>
                    </h3>
                @endif

                <p class="text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $post->content }}</p>

                <div class="mt-4 pt-4 border-t border-gray-50 flex justify-end">
                     <a href="{{ route('posts.show', $post->id) }}" class="text-sm text-gray-500 hover:text-blue-600">詳細を見る</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $posts->links() }}
    </div>
</x-layout>
