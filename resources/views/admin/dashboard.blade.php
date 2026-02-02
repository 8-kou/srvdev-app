<x-admin-layout title="管理者ダッシュボード">
    <x-slot:actions>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="text-sm text-slate-300 hover:text-white underline">ログアウト</button>
        </form>
    </x-slot:actions>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-slate-900/70 border border-slate-800 rounded-2xl p-6 shadow-xl">
            <h2 class="text-2xl font-bold text-white mb-2">管理者ダッシュボード</h2>
            <p class="text-slate-400 mb-6">コンテンツ管理や投稿のチェックを行えます。</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <a href="{{ route('admin.teachers.index') }}" class="group bg-slate-950/70 border border-slate-800 rounded-xl p-4 hover:border-emerald-400/60 transition">
                    <p class="text-sm text-slate-400">Teachers</p>
                    <h3 class="text-lg font-bold text-emerald-300 group-hover:text-emerald-200">先生紹介を管理</h3>
                </a>
                <a href="{{ route('admin.posts.index') }}" class="group bg-slate-950/70 border border-slate-800 rounded-xl p-4 hover:border-sky-400/60 transition">
                    <p class="text-sm text-slate-400">Posts</p>
                    <h3 class="text-lg font-bold text-sky-300 group-hover:text-sky-200">掲示板投稿を管理</h3>
                </a>
                <a href="{{ route('admin.schedules.index') }}" class="group bg-slate-950/70 border border-slate-800 rounded-xl p-4 hover:border-amber-400/60 transition">
                    <p class="text-sm text-slate-400">Schedules</p>
                    <h3 class="text-lg font-bold text-amber-300 group-hover:text-amber-200">スケジュールを管理</h3>
                </a>
                <a href="{{ route('home') }}" class="group bg-slate-950/70 border border-slate-800 rounded-xl p-4 hover:border-slate-500 transition">
                    <p class="text-sm text-slate-400">Front</p>
                    <h3 class="text-lg font-bold text-slate-200 group-hover:text-white">サイトを確認</h3>
                </a>
            </div>
        </div>

        <div class="bg-slate-900/70 border border-slate-800 rounded-2xl p-6 shadow-xl">
            <h3 class="text-lg font-bold text-white mb-3">クイック情報</h3>
            <ul class="text-sm text-slate-400 space-y-2">
                <li>公開コンテンツの更新は管理画面から行えます。</li>
                <li>先生紹介は画像・コメント・テーマ色を設定可能。</li>
                <li>スケジュールは複数日登録に対応。</li>
            </ul>
        </div>
    </div>
</x-admin-layout>
