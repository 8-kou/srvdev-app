<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ダッシュボード | 管理画面</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="p-8 bg-gray-50 min-h-screen">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">管理画面ダッシュボード</h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p class="text-xl text-gray-700">管理者としてログインに成功しました。</p>
            <p class="text-gray-600 mt-2">ここから各コンテンツの管理機能を作成していきます。</p>
            
            <form method="POST" action="{{ route('admin.logout') }}" class="mt-4">
                @csrf
                <button type="submit" class="text-blue-600 hover:text-blue-800 text-sm underline">
                    ログアウト
                </button>
            </form>
        </div>
    </div>
</body>
</html>