<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>先生情報の編集 | 校内ポータル</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-3xl mx-auto p-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">先生情報の編集</h1>
            <a href="{{ route('admin.teachers.index') }}" class="text-sm text-gray-600 hover:text-gray-800 underline">戻る</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <form action="{{ route('admin.teachers.update', $teacher) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-bold text-gray-700 mb-2">名前</label>
                    <input type="text" name="name" value="{{ old('name', $teacher->name) }}" class="w-full border rounded px-3 py-2" required maxlength="50">
                    @error('name')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold text-gray-700 mb-2">担当/専門</label>
                    <input type="text" name="subject" value="{{ old('subject', $teacher->subject) }}" class="w-full border rounded px-3 py-2" required maxlength="50">
                    @error('subject')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold text-gray-700 mb-2">一言コメント</label>
                    <textarea name="message" rows="4" class="w-full border rounded px-3 py-2" maxlength="1000">{{ old('message', $teacher->message) }}</textarea>
                    @error('message')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold text-gray-700 mb-2">並び順</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $teacher->sort_order) }}" class="w-full border rounded px-3 py-2">
                    @error('sort_order')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-bold text-gray-700 mb-2">画像</label>
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-16 h-16 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center">
                            @if($teacher->image_path)
                                <img src="{{ asset('storage/' . $teacher->image_path) }}" alt="{{ $teacher->name }}" class="w-full h-full object-cover">
                            @else
                                <span class="text-xl">👨‍🏫</span>
                            @endif
                        </div>
                        <input type="file" name="image" accept="image/*" class="w-full border rounded px-3 py-2 bg-white">
                    </div>
                    @error('image')
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
