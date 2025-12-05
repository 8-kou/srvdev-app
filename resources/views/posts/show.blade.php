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
            
            <div class="bg-gray-50 px-6 py-4 flex justify-end">
                <button class="text-gray-400 text-sm hover:text-gray-600 cursor-not-allowed" disabled>
                    通報する
                </button>
            </div>
        </div>
    </div>
</x-layout>