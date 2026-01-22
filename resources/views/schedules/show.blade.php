<x-layout title="予定の詳細">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-blue-500 pl-4">
        予定の詳細
    </h2>

    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow space-y-4">
        <p class="text-gray-700">タイトル：{{ $schedule->title }}</p>
        <p class="text-gray-700">日付：{{ \Carbon\Carbon::parse($schedule->event_date)->format('Y-m-d') }}</p>
        <p class="text-gray-700">説明：{{ $schedule->description }}</p>

        <div class="flex justify-between mt-6">
            <a href="{{ route('schedules.index') }}"
               class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
               戻る
            </a>
        </div>
    </div>
</x-layout>
