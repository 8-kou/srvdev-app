<x-admin-layout title="スケジュール登録">
    <x-slot:actions>
        <a href="{{ route('admin.schedules.index') }}" class="text-sm text-slate-300 hover:text-white underline">戻る</a>
    </x-slot:actions>

    <div class="bg-slate-900/70 border border-slate-800 rounded-2xl p-6 shadow-xl">
        <form action="{{ route('admin.schedules.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">タイトル</label>
                <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100" required maxlength="255">
                @error('title')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">日付（複数可）</label>
                <div id="date-fields" class="space-y-2">
                    <input type="date" name="event_dates[]" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100" required>
                </div>
                @error('event_dates')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
                @error('event_dates.*')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
                <button type="button" id="add-date" class="mt-2 text-sm text-sky-300 hover:text-sky-200 underline">日付を追加</button>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">説明</label>
                <textarea name="description" rows="4" class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100" maxlength="2000">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-amber-300 text-slate-950 px-6 py-2 rounded-lg hover:bg-amber-200 transition">保存</button>
            </div>
        </form>
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
                input.className = 'w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100';

                const remove = document.createElement('button');
                remove.type = 'button';
                remove.className = 'text-sm text-rose-300 hover:text-rose-200';
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
</x-admin-layout>
