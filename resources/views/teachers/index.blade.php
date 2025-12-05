<x-layout title="先生紹介">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-green-500 pl-4">先生紹介</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($teachers as $teacher)
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition group">
                <div class="h-24 bg-gradient-to-r from-green-400 to-teal-500"></div>
                <div class="px-6 relative">
                    <div class="w-24 h-24 bg-white rounded-full border-4 border-white absolute -top-12 flex items-center justify-center overflow-hidden shadow-md">
                        @if($teacher->image_path)
                            <img src="{{ asset('storage/' . $teacher->image_path) }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-4xl">👨‍🏫</span>
                        @endif
                    </div>
                </div>
                <div class="mt-14 px-6 pb-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $teacher->name }}</h3>
                    <p class="text-sm text-green-600 font-bold mb-4 uppercase tracking-wide">{{ $teacher->subject }}</p>
                    <div class="h-px w-16 bg-gray-200 mx-auto mb-4"></div>
                    <p class="text-gray-600 text-sm leading-relaxed text-left">
                        {{ $teacher->message ?? 'メッセージはまだありません。' }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>