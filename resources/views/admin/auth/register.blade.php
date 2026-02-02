<x-admin-layout title="管理者アカウント作成">
    <div class="max-w-md mx-auto bg-slate-900/80 border border-slate-800 rounded-2xl p-8 shadow-2xl">
        <h2 class="text-2xl font-bold text-white mb-6 text-center">管理者アカウント作成</h2>

        <form method="POST" action="{{ route('admin.register') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-slate-300 mb-2">名前</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                       class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100 focus:outline-none focus:ring-2 focus:ring-sky-500 @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-slate-300 mb-2">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                       class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100 focus:outline-none focus:ring-2 focus:ring-sky-500 @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-slate-300 mb-2">パスワード</label>
                <input type="password" id="password" name="password" required
                       class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100 focus:outline-none focus:ring-2 focus:ring-sky-500 @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-semibold text-slate-300 mb-2">パスワード（確認）</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                       class="w-full rounded-lg bg-slate-950 border border-slate-700 px-3 py-2 text-slate-100 focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>

            <button type="submit" class="w-full bg-emerald-400 hover:bg-emerald-300 text-slate-950 font-bold py-2 rounded-lg transition">
                作成
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('admin.login') }}" class="text-sm text-slate-300 hover:text-white underline">
                ログインへ戻る
            </a>
        </div>
    </div>
</x-admin-layout>
