<x-admin-layout title="先生紹介の管理">
    <x-slot:actions>
        <a href="{{ route('admin.dashboard') }}" class="text-sm text-slate-300 hover:text-white underline">戻る</a>
        <a href="{{ route('admin.teachers.create') }}" class="bg-emerald-400 text-slate-950 px-4 py-2 rounded-lg hover:bg-emerald-300 transition">新規追加</a>
    </x-slot:actions>

    <div class="bg-slate-900/70 border border-slate-800 rounded-2xl shadow-xl overflow-hidden">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-950/70 text-slate-300">
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
                    <tr class="border-t border-slate-800/70">
                        <td class="px-4 py-3">
                            <div class="w-12 h-12 rounded-full overflow-hidden bg-slate-800 flex items-center justify-center">
                                @if($teacher->image_path)
                                    <img src="{{ asset('storage/' . $teacher->image_path) }}" alt="{{ $teacher->name }}" class="w-full h-full object-cover">
                                @else
                                    <span class="text-lg">👨‍🏫</span>
                                @endif
                            </div>
                        </td>
                        <td class="px-4 py-3 text-slate-100">{{ $teacher->name }}</td>
                        <td class="px-4 py-3 text-slate-200">{{ $teacher->subject }}</td>
                        <td class="px-4 py-3 text-slate-400">{{ $teacher->message }}</td>
                        <td class="px-4 py-3 text-slate-300">{{ $teacher->sort_order }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.teachers.edit', $teacher) }}" class="text-sky-300 hover:text-sky-200 mr-3">編集</a>
                            <form action="{{ route('admin.teachers.destroy', $teacher) }}" method="POST" class="inline" onsubmit="return confirm('削除しますか？');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-300 hover:text-rose-200">削除</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="border-t border-slate-800/70">
                        <td colspan="6" class="px-4 py-10 text-center text-slate-400">先生情報がまだ登録されていません。</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-admin-layout>
