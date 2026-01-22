<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スケジュール管理 | 校内ポータル</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto p-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">スケジュール管理</h1>
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-600 hover:text-gray-800 underline">戻る</a>
                <a href="{{ route('admin.schedules.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">新規追加</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="text-left px-4 py-3">日付</th>
                        <th class="text-left px-4 py-3">タイトル</th>
                        <th class="text-left px-4 py-3">説明</th>
                        <th class="text-right px-4 py-3">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($schedules as $schedule)
                        <tr class="border-t">
                            <td class="px-4 py-3">{{ \Carbon\Carbon::parse($schedule->event_date)->format('Y/m/d') }}</td>
                            <td class="px-4 py-3">{{ $schedule->title }}</td>
                            <td class="px-4 py-3 text-gray-600">{{ \Illuminate\Support\Str::limit($schedule->description, 80) }}</td>
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('admin.schedules.edit', $schedule) }}" class="text-blue-600 hover:text-blue-800 mr-3">編集</a>
                                <form action="{{ route('admin.schedules.destroy', $schedule) }}" method="POST" class="inline" onsubmit="return confirm('削除しますか？');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">削除</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="border-t">
                            <td colspan="4" class="px-4 py-10 text-center text-gray-500">予定がまだ登録されていません。</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
