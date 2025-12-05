<x-layout title="掲示板">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">📋 掲示板</h2>
        <a href="{{ route('posts.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full shadow-lg transition transform hover:scale-105 flex items-center">
            <span class="text-xl mr-1">+</span> 投稿する
        </a>
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