<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '校内ポータル' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">

    <header class="bg-blue-600 text-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0">
                    <a href="/" class="text-xl font-bold tracking-wide flex items-center gap-2">
                        🏫 校内ポータル
                    </a>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-blue-200 transition font-medium">ホーム</a>
                    <a href="{{ route('posts.index') }}" class="hover:text-blue-200 transition font-medium">掲示板</a>
                    <a href="{{ route('teachers.index') }}" class="hover:text-blue-200 transition font-medium">先生紹介</a>
                    <a href="{{ route('schedules.index') }}" class="hover:text-blue-200 transition font-medium">スケジュール</a>
                    <a href="{{ route('map') }}" class="hover:text-blue-200 transition font-medium">マップ</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-gray-400 py-6 text-center text-sm mt-auto">
        &copy; {{ date('Y') }} School Portal Project. All rights reserved.
    </footer>

</body>
</html>