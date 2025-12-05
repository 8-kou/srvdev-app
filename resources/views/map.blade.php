<x-layout title="校内マップ">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-red-500 pl-4">校内マップ</h2>
    
    <div class="bg-white p-4 rounded-xl shadow-sm">
        <div class="aspect-video w-full bg-gray-200 rounded-lg flex items-center justify-center text-gray-500 border-2 border-dashed border-gray-300">
            <div class="text-center">
                <p class="text-xl font-bold mb-2">ここに校内地図の画像を配置</p>
                <p class="text-sm">imgタグで画像を読み込んでください</p>
            </div>
        </div>
        
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 border rounded-lg bg-gray-50">
                <h3 class="font-bold text-gray-800 mb-2">🏫 1号館</h3>
                <ul class="list-disc list-inside text-sm text-gray-600">
                    <li>1F: 食堂、事務室</li>
                    <li>2F: 大講義室</li>
                </ul>
            </div>
            <div class="p-4 border rounded-lg bg-gray-50">
                <h3 class="font-bold text-gray-800 mb-2">🏢 2号館</h3>
                <ul class="list-disc list-inside text-sm text-gray-600">
                    <li>1F: 図書館</li>
                    <li>3F: 実習室</li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>