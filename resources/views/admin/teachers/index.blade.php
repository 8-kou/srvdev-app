<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>先生紹介の管理 | 校内ポータル</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto p-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">先生紹介の管理</h1>
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-600 hover:text-gray-800 underline">戻る</a>
                <a href="{{ route('admin.teachers.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">新規追加</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="text-left px-4 py-3">画像</th>
                        <th class="text-left px-4 py-3">名前</th>
                        <th class="text-left px-4 py-3">担当/専門</th>
                        <th class="text-left px-4 py-3">一言</th>
                        <th class="text-left px-4 py-3">並び順</th>
                        <th class="text-right px-4 py-3">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($teachers as $teacher)
                        <tr class="border-t">
                            <td class="px-4 py-3">
                                <div class="w-12 h-12 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center">
                                    @if($teacher->image_path)
                                        <img src="{{ asset('storage/' . $teacher->image_path) }}" alt="{{ $teacher->name }}" class="w-full h-full object-cover">
                                    @else
                                        <span class="text-lg">👨‍🏫</span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-4 py-3">{{ $teacher->name }}</td>
                            <td class="px-4 py-3">{{ $teacher->subject }}</td>
                            <td class="px-4 py-3 text-gray-600">{{ $teacher->message }}</td>
                            <td class="px-4 py-3">{{ $teacher->sort_order }}</td>
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('admin.teachers.edit', $teacher) }}" class="text-blue-600 hover:text-blue-800 mr-3">編集</a>
                                <form action="{{ route('admin.teachers.destroy', $teacher) }}" method="POST" class="inline" onsubmit="return confirm('削除しますか？');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">削除</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="border-t">
                            <td colspan="6" class="px-4 py-10 text-center text-gray-500">先生情報がまだ登録されていません。</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
