<x-layout title="2025年度 校舎案内図">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-red-500 pl-4">2025年度 校舎案内図</h2>
    
    <div class="bg-white p-6 rounded-xl shadow-sm">
        
        <div class="mb-8">
            <h3 id="map-title" class="text-lg font-bold text-gray-700 mb-2 pl-2">マップ表示エリア</h3>
            
            <div class="aspect-video w-full bg-gray-100 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300 overflow-hidden relative">
                
                <div id="map-placeholder" class="text-center p-4">
                    <p class="text-xl font-bold text-gray-500 mb-2">下のボタンを押すと<br>ここに地図が表示されます</p>
                    <p class="text-sm text-gray-400">各階の詳細マップを確認できます</p>
                </div>

                <img id="main-map-image" src="" alt="マップ" class="hidden w-full h-full object-contain bg-white">
            </div>
        </div>

        <div class="space-y-4">
            
            <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <button onclick="showMap('/images/KBC8階.png', '8F 詳細マップ')" class="w-full flex flex-col md:flex-row text-left bg-white hover:bg-blue-50 transition-colors cursor-pointer group focus:outline-none focus:ring-2 focus:ring-blue-500">
                    
                    <div class="bg-blue-600 text-white w-full md:w-24 flex items-center justify-center p-2 font-bold text-xl group-hover:bg-blue-700">
                        8F
                    </div>

                    <div class="p-4 flex-1 flex justify-between items-center">
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">CBTセンター・ホール・各教室</h3>
                            
                            <div class="text-sm text-gray-600 space-y-1">
                                <p>803: CBTセンター</p>
                                <p>801, 802: 教室</p>
                                <p>804: 準備室</p>
                                <p>ホール・倉庫</p>
                                <p class="text-xs text-gray-500">
                                    トイレ(男女)・喫煙所(バルコニー)・エレベーター
                                </p>
                            </div>
                        </div>

                        <span class="text-xs text-blue-600 font-bold border border-blue-200 bg-white px-3 py-1 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            ↑ 上に表示
                        </span>
                    </div>
                </button>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <button onclick="showMap('/images/KBC7階.png', '7F 詳細マップ')" class="w-full flex flex-col md:flex-row text-left bg-white hover:bg-blue-50 transition-colors cursor-pointer group focus:outline-none focus:ring-2 focus:ring-blue-500">
                    
                    <div class="bg-blue-600 text-white w-full md:w-24 flex items-center justify-center p-2 font-bold text-xl group-hover:bg-blue-700">
                        7F
                    </div>

                    <div class="p-4 flex-1 flex justify-between items-center">
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">ITエンジニア科・実習室</h3>
                            
                            <div class="text-sm text-gray-600 space-y-1">
                                <p>701, 704, 705: ITエンジニア科 (ゲームプログラム)</p>
                                <p>702: 実習室②</p>
                                <p>703: 実習室③</p>
                                <p class="text-xs text-gray-500">
                                    トイレ(男女)・喫煙所(バルコニー)・エレベーター
                                </p>
                            </div>
                        </div>

                        <span class="text-xs text-blue-600 font-bold border border-blue-200 bg-white px-3 py-1 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            ↑ 上に表示
                        </span>
                    </div>
                </button>
            </div>

            <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <button onclick="showMap('/images/KBC6階.png', '6F 詳細マップ')" class="w-full flex flex-col md:flex-row text-left bg-white hover:bg-blue-50 transition-colors cursor-pointer group focus:outline-none focus:ring-2 focus:ring-blue-500">
                    
                    <div class="bg-blue-600 text-white w-full md:w-24 flex items-center justify-center p-2 font-bold text-xl group-hover:bg-blue-700">
                        6F
                    </div>

                    <div class="p-4 flex-1 flex justify-between items-center">
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">ICTマネジメント科・ITエンジニア科</h3>
                            
                            <div class="text-sm text-gray-600 space-y-1">
                                <p>601, 602: ITエンジニア科 (ゲームプログラム)</p>
                                <p>603, 604, 605: ICTマネジメント科</p>
                                <p>606: ガイダンス室</p>
                                <p class="text-xs text-gray-500">
                                    トイレ(男女)・喫煙所(バルコニー)・エレベーター
                                </p>
                            </div>
                        </div>

                        <span class="text-xs text-blue-600 font-bold border border-blue-200 bg-white px-3 py-1 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            ↑ 上に表示
                        </span>
                    </div>
                </button>
            </div>

            <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <button onclick="showMap('/images/KBC5階.png', '5F 詳細マップ')" class="w-full flex flex-col md:flex-row text-left bg-white hover:bg-blue-50 transition-colors cursor-pointer group focus:outline-none focus:ring-2 focus:ring-blue-500">
                    
                    <div class="bg-blue-600 text-white w-full md:w-24 flex items-center justify-center p-2 font-bold text-xl group-hover:bg-blue-700">
                        5F
                    </div>

                    <div class="p-4 flex-1 flex justify-between items-center">
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">情報スペシャリスト科・実習室</h3>
                            
                            <div class="text-sm text-gray-600 space-y-1">
                                <p>501, 502, 504: 情報スペシャリスト科 (サイバーセキュリティ)</p>
                                <p>505: 情報スペシャリスト科 (ベーシック)</p>
                                <p>503: 実習室①</p>
                                <p class="text-xs text-gray-500">
                                    トイレ(男女)・喫煙所(バルコニー)・エレベーター
                                </p>
                            </div>
                        </div>

                        <span class="text-xs text-blue-600 font-bold border border-blue-200 bg-white px-3 py-1 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            ↑ 上に表示
                        </span>
                    </div>
                </button>
            </div>

            <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <button onclick="showMap('/images/KBC4階.png', '4F 詳細マップ')" class="w-full flex flex-col md:flex-row text-left bg-white hover:bg-blue-50 transition-colors cursor-pointer group focus:outline-none focus:ring-2 focus:ring-blue-500">
                    
                    <div class="bg-blue-600 text-white w-full md:w-24 flex items-center justify-center p-2 font-bold text-xl group-hover:bg-blue-700">
                        4F
                    </div>

                    <div class="p-4 flex-1 flex justify-between items-center">
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">情報スペシャリスト科・ガイダンス室</h3>
                            
                            <div class="text-sm text-gray-600 space-y-1">
                                <p>401～404: 情報スペシャリスト科 (サイバーセキュリティ)</p>
                                <p>405: 情報スペシャリスト科 (ベーシック)</p>
                                <p>406: ガイダンス室</p>
                                <p class="text-xs text-gray-500">
                                    トイレ(男女)・喫煙所・エレベーター
                                </p>
                            </div>
                        </div>

                        <span class="text-xs text-blue-600 font-bold border border-blue-200 bg-white px-3 py-1 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            ↑ 上に表示
                        </span>
                    </div>
                </button>
            </div>

           <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <button onclick="showMap('/images/KBC3階.png', '3F 詳細マップ')" class="w-full flex flex-col md:flex-row text-left bg-white hover:bg-blue-50 transition-colors cursor-pointer group focus:outline-none focus:ring-2 focus:ring-blue-500">
                    
                    <div class="bg-blue-600 text-white w-full md:w-24 flex items-center justify-center p-2 font-bold text-xl group-hover:bg-blue-700">
                        3F
                    </div>

                    <div class="p-4 flex-1 flex justify-between items-center">
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">ITエンジニア科・NWラボ</h3>
                            
                            <div class="text-sm text-gray-600 space-y-1">
                                <p>301: 学生サロン</p>
                                <p>302, 304: ITエンジニア科 (グラフィックデザイン)</p>
                                <p>303: NWラボ</p>
                                <p class="text-xs text-gray-500">
                                    学園本部・トイレ(男女/多目的)・喫煙所
                                </p>
                            </div>
                        </div>

                        <span class="text-xs text-blue-600 font-bold border border-blue-200 bg-white px-3 py-1 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            ↑ 上に表示
                        </span>
                    </div>
                </button>
            </div>

           <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <button onclick="showMap('/images/KBC2階.jpg', '2F 詳細マップ')" class="w-full flex flex-col md:flex-row text-left bg-white hover:bg-blue-50 transition-colors cursor-pointer group focus:outline-none focus:ring-2 focus:ring-blue-500">
                    
                    <div class="bg-blue-600 text-white w-full md:w-24 flex items-center justify-center p-2 font-bold text-xl group-hover:bg-blue-700">
                        2F
                    </div>

                    <div class="p-4 flex-1 flex justify-between items-center">
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">事務局・職員室・各室</h3>
                            
                            <div class="text-sm text-gray-600 space-y-1">
                                <p>事務局・教務室・校長室・保健室</p>
                                <p>会議室・応接室・ホール・ロビー</p>
                                <p>201, 202, 203, 204教室</p>
                                <p class="text-xs text-gray-500">
                                    書庫室・倉庫・喫煙所・エレベーター・各階段
                                </p>
                            </div>
                        </div>

                        <span class="text-xs text-blue-600 font-bold border border-blue-200 bg-white px-3 py-1 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            ↑ 上に表示
                        </span>
                    </div>
                </button>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <button onclick="showMap('/images/KBC1階.png', '1F 詳細マップ')" class="w-full flex flex-col md:flex-row text-left bg-white hover:bg-blue-50 transition-colors cursor-pointer group focus:outline-none focus:ring-2 focus:ring-blue-500">
                    
                    <div class="bg-blue-600 text-white w-full md:w-24 flex items-center justify-center p-2 font-bold text-xl group-hover:bg-blue-700">
                        1F
                    </div>

                    <div class="p-4 flex-1 flex justify-between items-center">
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">駐車場・エントランス</h3>
                            
                            <div class="text-sm text-gray-600 space-y-1">
                                <p class="flex items-center">
                                    <span class="font-bold text-red-500 mr-1">※禁煙※</span> 
                                    駐車場・駐輪場
                                </p>
                                <p>倉庫・エレベーター・外階段</p>
                                <p class="text-xs text-gray-500">
                                    南側出口：壺川中公園（避難場所）方面
                                </p>
                            </div>
                        </div>

                        <span class="text-xs text-blue-600 font-bold border border-blue-200 bg-white px-3 py-1 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            ↑ 上に表示
                        </span>
                    </div>
                </button>
            </div>
            
        </div>
    </div>

    <script>
        function showMap(imagePath, titleText) {
            // 1. プレースホルダー（最初のメッセージ）を隠す
            const placeholder = document.getElementById('map-placeholder');
            if (placeholder) {
                placeholder.classList.add('hidden');
            }

            // 2. 画像要素を取得し、パスを設定して表示する
            const mapImage = document.getElementById('main-map-image');
            mapImage.src = imagePath;
            mapImage.classList.remove('hidden');

            // 3. タイトルを更新する
            const titleElement = document.getElementById('map-title');
            titleElement.innerText = titleText;
            
            // スムーズに上までスクロールさせる（必要なら）
            document.getElementById('map-title').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    </script>
</x-layout>