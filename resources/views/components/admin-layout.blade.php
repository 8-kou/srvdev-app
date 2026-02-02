<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '管理者' }} | 校内ポータル</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <div class="fixed inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(56,189,248,0.18),transparent_35%),radial-gradient(circle_at_80%_10%,rgba(99,102,241,0.18),transparent_40%),radial-gradient(circle_at_30%_80%,rgba(34,197,94,0.14),transparent_45%)]"></div>

    <header class="relative z-10 border-b border-slate-800/70 bg-slate-950/70 backdrop-blur">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-slate-800/70 flex items-center justify-center text-xl">🛡️</div>
                <div>
                    <p class="text-sm text-slate-400">Admin</p>
                    <h1 class="text-lg font-bold text-slate-100">校内ポータル</h1>
                </div>
            </div>
            <div class="flex items-center gap-3">
                {{ $actions ?? '' }}
            </div>
        </div>
    </header>

    <main class="relative z-10 max-w-6xl mx-auto px-6 py-8">
        {{ $slot }}
    </main>
</body>
</html>
