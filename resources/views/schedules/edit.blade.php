<x-layout title="予定を編集">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-blue-500 pl-4">予定を編集</h2>

    <form action="{{ route('schedules.update', $schedule->id) }}" 
          method="POST" 
          class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="p-4 mb-4 text-red-700 bg-red-100 rounded">
                入力に不備があります。
            </div>
        @endif

        <label class="block mb-4">
            <span class="text-gray-700">タイトル</span>
            <input type="text" 
                   name="title" 
                   value="{{ old('title', $schedule->title) }}"
                   class="mt-1 w-full border p-2 rounded" 
                   required>
        </label>

        <label class="block mb-4">
            <span class="text-gray-700">日付</span>
            <input type="date" 
                   name="event_date" 
                   value="{{ old('event_date', $schedule->event_date) }}"
                   class="mt-1 w-full border p-2 rounded" 
                   required>
        </label>

        <label class="block mb-4">
            <span class="text-gray-700">説明</span>
            <textarea name="description"
                      class="mt-1 w-full border p-2 rounded">{{ old('description', $schedule->description) }}</textarea>
        </label>

        <div class="flex justify-between items-center mt-6">

            {{-- 戻る --}}
            <a href="{{ route('schedules.show', $schedule->id) }}" 
               class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                戻る
            </a>

            {{-- 更新 --}}
            <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                更新
            </button>

        </div>
    </form>
</x-layout>
