<x-layout title="先生紹介" video="teachers.mp4">
    <div class="inline-block bg-white/75 backdrop-blur-sm px-4 py-3 rounded-xl shadow-md mb-6">
        <h2 class="text-2xl font-bold text-gray-800 border-l-4 border-green-500 pl-4">先生紹介</h2>
    </div>

    <div id="teacher-overlay" class="hidden fixed inset-0 bg-black/30 z-20"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($teachers as $teacher)
            <div data-teacher-card class="teacher-card bg-white rounded-xl shadow-sm hover:shadow-lg transition group cursor-pointer relative overflow-hidden">
                <div class="h-24 rounded-t-xl" style="background-color: {{ $teacher->header_color ?? '#34d399' }};"></div>
                <div class="px-6">
                    <div class="-mt-8 flex justify-center">
                        <div class="w-20 h-20 bg-white rounded-full border-4 border-white flex items-center justify-center overflow-hidden shadow-md">
                            @if($teacher->image_path)
                                <img src="{{ asset('storage/' . $teacher->image_path) }}" class="w-full h-full object-cover rounded-full" alt="{{ $teacher->name }}">
                            @else
                                <span class="text-4xl">👨‍🏫</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mt-3 px-6 pb-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $teacher->name }}</h3>
                    <p class="text-sm font-bold mb-4 uppercase tracking-wide" style="color: {{ $teacher->header_color ?? '#34d399' }};">{{ $teacher->subject }}</p>
                    <div class="h-px w-16 bg-gray-200 mx-auto mb-4"></div>
                    <p class="text-gray-600 text-sm leading-relaxed text-left">
                        {{ $teacher->message ?? 'メッセージはまだありません。' }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .teacher-card {
            transition: transform 200ms ease, box-shadow 200ms ease;
        }
        .teacher-card.is-active {
            transform: translateY(-16px) scale(1.06);
            box-shadow: 0 28px 60px rgba(0, 0, 0, 0.25);
            position: relative;
            z-index: 30;
        }
    </style>

    <script>
        (function () {
            const overlay = document.getElementById('teacher-overlay');
            const cards = document.querySelectorAll('[data-teacher-card]');
            let activeCard = null;

            function clearActive() {
                if (activeCard) {
                    activeCard.classList.remove('is-active');
                    activeCard = null;
                }
                overlay.classList.add('hidden');
            }

            cards.forEach((card) => {
                card.addEventListener('click', () => {
                    if (activeCard === card) {
                        clearActive();
                        return;
                    }
                    if (activeCard) {
                        activeCard.classList.remove('is-active');
                    }
                    activeCard = card;
                    card.classList.add('is-active');
                    overlay.classList.remove('hidden');
                });
            });

            overlay.addEventListener('click', clearActive);
        })();
    </script>
</x-layout>
