<x-admin-layout title="管理者ログイン">
    <div class="max-w-md mx-auto bg-slate-900/80 border border-slate-800 rounded-2xl p-8 shadow-2xl">
        <h2 class="text-2xl font-bold text-white mb-6 text-center">管理者ログイン</h2>

        <form method="POST" action="{{ route('admin.login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-semibold text-slate-300 mb-2">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
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

            <button type="submit" class="w-full bg-sky-500 hover:bg-sky-400 text-slate-950 font-bold py-2 rounded-lg transition">
                ログイン
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('admin.register') }}" class="text-sm text-slate-300 hover:text-white underline">
                新規アカウント作成
            </a>
        </div>
    </div>
</x-admin-layout>
