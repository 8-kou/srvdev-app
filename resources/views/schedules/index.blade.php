<x-layout title="年間スケジュール">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-yellow-500 pl-4">年間スケジュール</h2>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden max-w-4xl mx-auto">
        @if($schedules->count() > 0)
            @foreach($schedules as $schedule)
                <div class="flex flex-col md:flex-row p-6 border-b border-gray-100 last:border-0 hover:bg-yellow-50 transition group">
                    <div class="md:w-32 mb-2 md:mb-0 flex-shrink-0">
                        <div class="flex items-center text-yellow-600 font-bold">
                            <span class="text-4xl mr-2 font-mono">{{ \Carbon\Carbon::parse($schedule->event_date)->format('d') }}</span>
                            <div class="flex flex-col text-sm uppercase tracking-wider text-gray-500">
                                <span>{{ \Carbon\Carbon::parse($schedule->event_date)->format('M') }}</span>
                                <span>{{ \Carbon\Carbon::parse($schedule->event_date)->format('Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-full border-l-2 border-transparent md:border-gray-100 md:pl-6 group-hover:border-yellow-300 transition-colors">
                        <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $schedule->title }}</h3>
                        <p class="text-gray-600 text-sm">{{ $schedule->description }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="p-12 text-center text-gray-500">
                予定は登録されていません。
            </div>
        @endif
    </div>

        {{-- ② カレンダー（カードから外に出す） --}}
        <div class="mt-10 max-w-4xl mx-auto">
            <div id="calendar"></div>
        </div>

        @section('scripts')
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
            <script src="/js/calendar.js"></script>
            
        @endsection

</x-layout>