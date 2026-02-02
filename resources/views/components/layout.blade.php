<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '校内ポータル' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="app-video-bg text-gray-800 font-sans antialiased flex flex-col min-h-screen">
    <div class="bg-video-layer" aria-hidden="true">
        <video class="bg-video" autoplay muted loop playsinline preload="auto">
            <source src="/videos/{{ $video ?? 'home.mp4' }}" type="video/mp4">
        </video>
        <div class="bg-video-overlay"></div>
    </div>

    <header class="bg-[#111827] text-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0">
                    <a href="/" class="text-xl font-bold tracking-wide flex items-center gap-2">
                        🏫 校内ポータル
                    </a>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-gray-200 transition font-medium">ホーム</a>
                    <a href="{{ route('posts.index') }}" class="hover:text-gray-200 transition font-medium">掲示板</a>
                    <a href="{{ route('teachers.index') }}" class="hover:text-gray-200 transition font-medium">先生紹介</a>
                    <a href="{{ route('schedules.index') }}" class="hover:text-gray-200 transition font-medium">スケジュール</a>
                    <a href="{{ route('map') }}" class="hover:text-gray-200 transition font-medium">校内地図</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-8 w-full">
        {{ $slot }}
    </main>

    @yield('scripts')

    <footer class="bg-[#0b1220] text-gray-400 py-6 text-center text-sm mt-auto">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
            <span>&copy; {{ date('Y') }} School Portal Project. All rights reserved.</span>
            <a href="{{ route('admin/login') }}" class="text-gray-300 hover:text-white underline">管理者ページ</a>
        </div>
    </footer>

</body>
</html>
