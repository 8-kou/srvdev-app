<x-layout title="予定の詳細">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-blue-500 pl-4">
        予定の詳細
    </h2>

    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow space-y-4">

        <p class="text-gray-700">タイトル：{{ $schedule->title }}</p>
        <p class="text-gray-700">日付：{{ $schedule->event_date }}</p>
        <p class="text-gray-700">説明：{{ $schedule->description }}</p>

        <div class="flex justify-between mt-6">

            {{-- 戻る --}}
            <a href="{{ route('schedules.index') }}"
               class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
               戻る
            </a>

            {{-- ボタン右側（編集・削除） --}}
            <div class="flex space-x-2">

                {{-- 編集 --}}
                <a href="{{ route('schedules.edit', $schedule->id) }}"
                   class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                   編集
                </a>

                {{-- 削除 --}}
                <form action="{{ route('schedules.destroy', $schedule->id) }}"
                      method="POST"
                      onsubmit="return confirm('本当に削除しますか？');">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                        削除
                    </button>
                </form>

            </div>
        </div>

    </div>
</x-layout>
