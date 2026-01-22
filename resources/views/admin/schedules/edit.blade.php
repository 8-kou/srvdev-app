<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スケジュール編集 | 校内ポータル</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-3xl mx-auto p-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">スケジュール編集</h1>
            <a href="{{ route('admin.schedules.index') }}" class="text-sm text-gray-600 hover:text-gray-800 underline">戻る</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <form action="{{ route('admin.schedules.update', $schedule) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-bold text-gray-700 mb-2">タイトル</label>
                    <input type="text" name="title" value="{{ old('title', $schedule->title) }}" class="w-full border rounded px-3 py-2" required maxlength="255">
                    @error('title')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold text-gray-700 mb-2">日付</label>
                    <input type="date" name="event_date" value="{{ old('event_date', $schedule->event_date) }}" class="w-full border rounded px-3 py-2" required>
                    @error('event_date')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-bold text-gray-700 mb-2">説明</label>
                    <textarea name="description" rows="4" class="w-full border rounded px-3 py-2" maxlength="2000">{{ old('description', $schedule->description) }}</textarea>
                    @error('description')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">更新</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
