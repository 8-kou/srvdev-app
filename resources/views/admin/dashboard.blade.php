<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ダッシュボード | 校内ポータル</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-5xl mx-auto p-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">管理者ダッシュボード</h1>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="text-sm text-blue-600 hover:text-blue-800 underline">
                    ログアウト
                </button>
            </form>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <p class="text-gray-700">管理者向けのメニューです。</p>
            <div class="mt-4 flex flex-wrap gap-4">
                <a href="{{ route('admin.teachers.index') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    先生紹介を管理
                </a>
                <a href="{{ route('admin.posts.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    掲示板投稿を管理
                </a>
                <a href="{{ route('admin.schedules.index') }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                    スケジュールを管理
                </a>
            </div>
        </div>
    </div>
</body>
</html>
