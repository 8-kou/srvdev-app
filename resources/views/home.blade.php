<x-layout title="ホーム">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-4">
            Welcome to Campus Portal
        </h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            学科のみんなのための情報共有サイトです。<br>
            お知らせの確認や、困ったときの連絡に使ってください。
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <a href="{{ route('posts.index') }}" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 border-t-4 border-blue-500 group">
            <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 mb-2">📢 掲示板</h3>
            <p class="text-sm text-gray-500">学生同士の質問や連絡はこちら。</p>
        </a>
        <a href="{{ route('teachers.index') }}" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 border-t-4 border-green-500 group">
            <h3 class="text-xl font-bold text-gray-800 group-hover:text-green-600 mb-2">👨‍🏫 先生紹介</h3>
            <p class="text-sm text-gray-500">研究室の場所や専門分野を確認。</p>
        </a>
        <a href="{{ route('schedules.index') }}" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 border-t-4 border-yellow-500 group">
            <h3 class="text-xl font-bold text-gray-800 group-hover:text-yellow-600 mb-2">🗓 スケジュール</h3>
            <p class="text-sm text-gray-500">年間の行事予定や試験日程。</p>
        </a>
        <a href="{{ route('map') }}" class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 border-t-4 border-red-500 group">
            <h3 class="text-xl font-bold text-gray-800 group-hover:text-red-600 mb-2">🗺 校内マップ</h3>
            <p class="text-sm text-gray-500">教室や施設の位置を確認。</p>
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2 flex items-center">
            <span class="mr-2">🆕</span> 最新の投稿
        </h2>
        @if($latestPosts->count() > 0)
            <div class="space-y-4">
                @foreach($latestPosts as $post)
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between p-3 hover:bg-gray-50 rounded-lg transition">
                        <div>
                            <span class="inline-block px-2 py-1 text-xs font-semibold bg-gray-200 text-gray-700 rounded mr-2">
                                {{ $post->category }}
                            </span>
                            <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 font-medium hover:underline">
                                {{ $post->title ?? Str::limit($post->content, 30) }}
                            </a>
                        </div>
                        <span class="text-sm text-gray-400 mt-1 sm:mt-0">
                            {{ $post->created_at->format('Y/m/d') }} by {{ $post->author_name }}
                        </span>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 text-right">
                <a href="{{ route('posts.index') }}" class="text-sm text-blue-500 hover:text-blue-700 font-medium">もっと見る &rarr;</a>
            </div>
        @else
            <p class="text-gray-500 text-center py-4">まだ投稿はありません。</p>
        @endif
    </div>
</x-layout>