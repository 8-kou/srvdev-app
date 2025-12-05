<x-layout title="投稿する">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">新規投稿</h2>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">ニックネーム <span class="text-red-500">*</span></label>
                <input type="text" name="author_name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required placeholder="例: 情報太郎">
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">カテゴリ <span class="text-red-500">*</span></label>
                <select name="category" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="雑談">雑談</option>
                    <option value="質問">質問</option>
                    <option value="イベント">イベント</option>
                    <option value="その他">その他</option>
                </select>
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">タイトル (任意)</label>
                <input type="text" name="title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="短いタイトル">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">内容 <span class="text-red-500">*</span></label>
                <textarea name="content" rows="6" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required placeholder="ここに本文を入力してください..."></textarea>
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('posts.index') }}" class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-lg hover:bg-gray-300 transition">キャンセル</a>
                <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-blue-700 transition shadow">投稿する</button>
            </div>
        </form>
    </div>
</x-layout>
