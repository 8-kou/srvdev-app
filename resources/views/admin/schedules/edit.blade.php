<x-admin-layout title="スケジュール編集">
    <x-slot:actions>
        <a href="{{ route('admin.schedules.index') }}" class="text-sm text-slate-300 hover:text-white underline">戻る</a>
    </x-slot:actions>

    <div class="bg-slate-900/70 border border-slate-800 rounded-2xl p-6 shadow-xl">
        <form action="{{ route('admin.schedules.update', $schedule) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">タイトル</label>
                <input type="text" name="title" value="{{ old('title', $schedule->title) }}" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100" required maxlength="255">
                @error('title')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">日付</label>
                <input type="date" name="event_date" value="{{ old('event_date', $schedule->event_date) }}" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100" required>
                @error('event_date')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">説明</label>
                <textarea name="description" rows="4" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100" maxlength="2000">{{ old('description', $schedule->description) }}</textarea>
                @error('description')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-sky-400 text-slate-950 px-6 py-2 rounded-lg hover:bg-sky-300 transition">更新</button>
            </div>
        </form>
    </div>
</x-admin-layout>
