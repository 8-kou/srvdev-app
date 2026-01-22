<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スケジュール登録 | 校内ポータル</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-3xl mx-auto p-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">スケジュール登録</h1>
            <a href="{{ route('admin.schedules.index') }}" class="text-sm text-gray-600 hover:text-gray-800 underline">戻る</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <form action="{{ route('admin.schedules.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-bold text-gray-700 mb-2">タイトル</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full border rounded px-3 py-2" required maxlength="255">
                    @error('title')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold text-gray-700 mb-2">日付（複数可）</label>
                    <div id="date-fields" class="space-y-2">
                        <input type="date" name="event_dates[]" class="w-full border rounded px-3 py-2" required>
                    </div>
                    @error('event_dates')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    @error('event_dates.*')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <button type="button" id="add-date" class="mt-2 text-sm text-blue-600 hover:text-blue-800 underline">日付を追加</button>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-bold text-gray-700 mb-2">説明</label>
                    <textarea name="description" rows="4" class="w-full border rounded px-3 py-2" maxlength="2000">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">保存</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        (function () {
            const addButton = document.getElementById('add-date');
            const container = document.getElementById('date-fields');

            addButton.addEventListener('click', function () {
                const wrapper = document.createElement('div');
                wrapper.className = 'flex items-center gap-2';

                const input = document.createElement('input');
                input.type = 'date';
                input.name = 'event_dates[]';
                input.required = true;
                input.className = 'w-full border rounded px-3 py-2';

                const remove = document.createElement('button');
                remove.type = 'button';
                remove.className = 'text-sm text-red-600 hover:text-red-800';
                remove.textContent = '削除';
                remove.addEventListener('click', function () {
                    container.removeChild(wrapper);
                });

                wrapper.appendChild(input);
                wrapper.appendChild(remove);
                container.appendChild(wrapper);
            });
        })();
    </script>
</body>
</html>
