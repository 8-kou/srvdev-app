<x-admin-layout title="スケジュール管理">
    <x-slot:actions>
        <a href="{{ route('admin.dashboard') }}" class="text-sm text-slate-300 hover:text-white underline">戻る</a>
        <a href="{{ route('admin.schedules.create') }}" class="bg-amber-300 text-slate-950 px-4 py-2 rounded-lg hover:bg-amber-200 transition">新規追加</a>
    </x-slot:actions>

    <div class="bg-slate-900/70 border border-slate-800 rounded-2xl shadow-xl overflow-hidden">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-950/70 text-slate-300">
                <tr>
                    <th class="text-left px-4 py-3">日付</th>
                    <th class="text-left px-4 py-3">タイトル</th>
                    <th class="text-left px-4 py-3">説明</th>
                    <th class="text-right px-4 py-3">操作</th>
                </tr>
            </thead>
            <tbody>
                @forelse($schedules as $schedule)
                    <tr class="border-t border-slate-800/70">
                        <td class="px-4 py-3 text-slate-200">{{ \Carbon\Carbon::parse($schedule->event_date)->format('Y/m/d') }}</td>
                        <td class="px-4 py-3 text-slate-100">{{ $schedule->title }}</td>
                        <td class="px-4 py-3 text-slate-400">{{ \Illuminate\Support\Str::limit($schedule->description, 80) }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.schedules.edit', $schedule) }}" class="text-sky-300 hover:text-sky-200 mr-3">編集</a>
                            <form action="{{ route('admin.schedules.destroy', $schedule) }}" method="POST" class="inline" onsubmit="return confirm('削除しますか？');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-300 hover:text-rose-200">削除</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="border-t border-slate-800/70">
                        <td colspan="4" class="px-4 py-10 text-center text-slate-400">予定がまだ登録されていません。</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-admin-layout>
