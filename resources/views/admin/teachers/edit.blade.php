<x-admin-layout title="先生情報の編集">
    <x-slot:actions>
        <a href="{{ route('admin.teachers.index') }}" class="text-sm text-slate-300 hover:text-white underline">戻る</a>
    </x-slot:actions>

    <div class="bg-slate-900/70 border border-slate-800 rounded-2xl p-6 shadow-xl">
        <form action="{{ route('admin.teachers.update', $teacher) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">名前</label>
                <input type="text" name="name" value="{{ old('name', $teacher->name) }}" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100" required maxlength="50">
                @error('name')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">担当/専門</label>
                <input type="text" name="subject" value="{{ old('subject', $teacher->subject) }}" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100" required maxlength="50">
                @error('subject')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">一言コメント</label>
                <textarea name="message" rows="4" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100" maxlength="1000">{{ old('message', $teacher->message) }}</textarea>
                @error('message')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2">並び順</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $teacher->sort_order) }}" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100">
                    @error('sort_order')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2">テーマ色</label>
                    <input type="color" name="header_color" value="{{ old('header_color', $teacher->header_color ?? '#34d399') }}" class="w-24 h-10 border border-slate-700 rounded">
                    @error('header_color')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">画像</label>
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-16 h-16 rounded-full overflow-hidden bg-slate-800 flex items-center justify-center">
                        @if($teacher->image_path)
                            <img src="{{ asset('storage/' . $teacher->image_path) }}" alt="{{ $teacher->name }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-xl">👨‍🏫</span>
                        @endif
                    </div>
                    <input type="file" name="image" accept="image/*" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100">
                </div>
                @error('image')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-sky-400 text-slate-950 px-6 py-2 rounded-lg hover:bg-sky-300 transition">更新</button>
            </div>
        </form>
    </div>
</x-admin-layout>
