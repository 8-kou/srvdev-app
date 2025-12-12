<x-layout title="{{ $post->title }}">
    <div class="max-w-4xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('posts.index') }}" class="text-gray-500 hover:text-blue-600 flex items-center transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                掲示板一覧に戻る
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 sm:p-8 border-b border-gray-100 bg-gray-50">
                <div class="flex flex-wrap items-center gap-3 mb-4">
                    <span class="bg-blue-600 text-white text-xs px-3 py-1 rounded-full font-bold shadow-sm">
                        {{ $post->category }}
                    </span>
                    <span class="text-gray-500 text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $post->created_at->format('Y年m月d日 H:i') }}
                    </span>
                </div>
                
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 leading-tight">
                    {{ $post->title ?? '（タイトルなし）' }}
                </h1>
                
                <div class="mt-4 flex items-center">
                    <div class="bg-gradient-to-br from-blue-400 to-blue-600 rounded-full w-10 h-10 flex items-center justify-center text-white font-bold text-lg shadow">
                        {{ substr($post->author_name, 0, 1) }}
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-bold text-gray-900">{{ $post->author_name }}</p>
                        <p class="text-xs text-gray-500">投稿者</p>
                    </div>
                </div>
            </div>

            <div class="p-6 sm:p-8 min-h-[200px]">
                <div class="prose max-w-none text-gray-800 leading-loose whitespace-pre-wrap text-base">
{{ $post->content }}
                </div>
            </div>
            
            <div class="bg-gray-50 px-6 py-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <form action="{{ route('posts.toggleLike', $post->id) }}" method="POST" class="inline">
                        @csrf
                        @method('POST')
                        <button type="submit" class="flex items-center {{ $post->likes->where('ip_address', request()->ip())->count() > 0 ? 'text-red-600' : 'text-gray-500' }} hover:text-red-600 transition">
                            <svg class="h-5 w-5 mr-1 {{ $post->likes->where('ip_address', request()->ip())->count() > 0 ? 'fill-current' : '' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            いいね🥰 ({{ $post->likes->count() }})
                        </button>
                    </form>
                </div>
                <button class="text-gray-400 text-sm hover:text-gray-600 cursor-not-allowed" disabled>
                    通報する
                </button>
            </div>
        </div>

        <!-- コメント一覧 -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-gray-900 mb-4">コメント💭 ({{ $post->replies->count() }})</h2>
            @if($post->replies->count() > 0)
                <div class="space-y-4">
                    @foreach($post->replies as $reply)
                        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4">
                            <div class="flex items-center mb-2">
                                <div class="bg-gradient-to-br from-green-400 to-green-600 rounded-full w-8 h-8 flex items-center justify-center text-white font-bold text-sm shadow">
                                    {{ substr($reply->author_name, 0, 1) }}
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-bold text-gray-900">{{ $reply->author_name }}</p>
                                    <p class="text-xs text-gray-500">{{ $reply->created_at->format('Y年m月d日 H:i') }}</p>
                                </div>
                                <form action="{{ route('posts.toggleLike', $reply->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="flex items-center {{ $reply->likes->where('ip_address', request()->ip())->count() > 0 ? 'text-red-600' : 'text-gray-500' }} hover:text-red-600 transition text-sm">
                                        <svg class="h-4 w-4 mr-1 {{ $reply->likes->where('ip_address', request()->ip())->count() > 0 ? 'fill-current' : '' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        {{ $reply->likes->count() }}
                                    </button>
                                </form>
                            </div>
                            <div class="text-gray-800 whitespace-pre-wrap">
                                {{ $reply->content }}
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">まだコメントはありません。</p>
            @endif
        </div>

        <!-- コメントフォーム -->
        <div class="mt-8 bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">コメントを投稿する</h3>
            <form action="{{ route('posts.storeReply', $post->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="author_name" class="block text-sm font-medium text-gray-700 mb-1">名前</label>
                    <input type="text" id="author_name" name="author_name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required maxlength="20">
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">内容</label>
                    <textarea id="content" name="content" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required maxlength="1000"></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">コメントを投稿</button>
            </form>
        </div>
    </div>
</x-layout>