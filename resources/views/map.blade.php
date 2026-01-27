<x-layout title="校舎案内図" video="map.mp4">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
        <div class="inline-block bg-white/75 backdrop-blur-sm px-4 py-3 rounded-xl shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 border-l-4 border-red-500 pl-4">校舎案内図</h2>
        </div>
        <p class="text-sm text-gray-100 sm:text-gray-200">フロアをクリックして詳細を確認</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <button type="button" class="group bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 text-left p-5"
                data-floor
                data-title="8F 詳細マップ"
                data-image="/images/KBC8階.png">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xl font-bold text-blue-600">8F</span>
                <span class="text-xs text-blue-600 font-bold border border-blue-200 bg-blue-50 px-2 py-1 rounded-full">クリック</span>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">CBTセンター・ホール・教室</h3>
            <p class="text-sm text-gray-600">CBTセンター、教室、準備室など</p>
            <div class="hidden" data-details>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>803: CBTセンター</li>
                    <li>801, 802: 教室</li>
                    <li>804: 準備室</li>
                    <li>ホール・倉庫</li>
                    <li class="text-xs text-gray-500">トイレ(男女)・喫煙所(バルコニー)・エレベーター</li>
                </ul>
            </div>
        </button>

        <button type="button" class="group bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 text-left p-5"
                data-floor
                data-title="7F 詳細マップ"
                data-image="/images/KBC7階.png">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xl font-bold text-emerald-600">7F</span>
                <span class="text-xs text-emerald-600 font-bold border border-emerald-200 bg-emerald-50 px-2 py-1 rounded-full">クリック</span>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">ITエンジニア科・実習室</h3>
            <p class="text-sm text-gray-600">実習室や教室のフロア</p>
            <div class="hidden" data-details>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>701, 704, 705: ITエンジニア科(ゲームプログラム)</li>
                    <li>702: 実習室②</li>
                    <li>703: 実習室③</li>
                    <li class="text-xs text-gray-500">トイレ(男女)・喫煙所(バルコニー)・エレベーター</li>
                </ul>
            </div>
        </button>

        <button type="button" class="group bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 text-left p-5"
                data-floor
                data-title="6F 詳細マップ"
                data-image="/images/KBC6階.png">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xl font-bold text-cyan-600">6F</span>
                <span class="text-xs text-cyan-600 font-bold border border-cyan-200 bg-cyan-50 px-2 py-1 rounded-full">クリック</span>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">ICTマネジメント科・ITエンジニア科</h3>
            <p class="text-sm text-gray-600">ICT/IT系の教室が集中</p>
            <div class="hidden" data-details>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>601, 602: ITエンジニア科(ゲームプログラム)</li>
                    <li>603, 604, 605: ICTマネジメント科</li>
                    <li>606: ガイダンス室</li>
                    <li class="text-xs text-gray-500">トイレ(男女)・喫煙所(バルコニー)・エレベーター</li>
                </ul>
            </div>
        </button>

        <button type="button" class="group bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 text-left p-5"
                data-floor
                data-title="5F 詳細マップ"
                data-image="/images/KBC5階.png">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xl font-bold text-purple-600">5F</span>
                <span class="text-xs text-purple-600 font-bold border border-purple-200 bg-purple-50 px-2 py-1 rounded-full">クリック</span>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">情報スペシャリスト科・実習室</h3>
            <p class="text-sm text-gray-600">セキュリティ/ベーシック系</p>
            <div class="hidden" data-details>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>501, 502, 504: 情報スペシャリスト科(サイバーセキュリティ)</li>
                    <li>505: 情報スペシャリスト科(ベーシック)</li>
                    <li>503: 実習室①</li>
                    <li class="text-xs text-gray-500">トイレ(男女)・喫煙所(バルコニー)・エレベーター</li>
                </ul>
            </div>
        </button>

        <button type="button" class="group bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 text-left p-5"
                data-floor
                data-title="4F 詳細マップ"
                data-image="/images/KBC4階.png">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xl font-bold text-amber-600">4F</span>
                <span class="text-xs text-amber-600 font-bold border border-amber-200 bg-amber-50 px-2 py-1 rounded-full">クリック</span>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">情報スペシャリスト科・ガイダンス室</h3>
            <p class="text-sm text-gray-600">セキュリティ系教室中心</p>
            <div class="hidden" data-details>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>401〜404: 情報スペシャリスト科(サイバーセキュリティ)</li>
                    <li>405: 情報スペシャリスト科(ベーシック)</li>
                    <li>406: ガイダンス室</li>
                    <li class="text-xs text-gray-500">トイレ(男女)・喫煙所・エレベーター</li>
                </ul>
            </div>
        </button>

        <button type="button" class="group bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 text-left p-5"
                data-floor
                data-title="3F 詳細マップ"
                data-image="/images/KBC3階.png">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xl font-bold text-sky-600">3F</span>
                <span class="text-xs text-sky-600 font-bold border border-sky-200 bg-sky-50 px-2 py-1 rounded-full">クリック</span>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">ITエンジニア科・NWラボ</h3>
            <p class="text-sm text-gray-600">学生サロンやラボ</p>
            <div class="hidden" data-details>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>301: 学生サロン</li>
                    <li>302, 304: ITエンジニア科(グラフィック/ゲーム)</li>
                    <li>303: NWラボ</li>
                    <li class="text-xs text-gray-500">学園本部・トイレ(男女/多目的)・喫煙所</li>
                </ul>
            </div>
        </button>

        <button type="button" class="group bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 text-left p-5"
                data-floor
                data-title="2F 詳細マップ"
                data-image="/images/KBC2階.png">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xl font-bold text-rose-600">2F</span>
                <span class="text-xs text-rose-600 font-bold border border-rose-200 bg-rose-50 px-2 py-1 rounded-full">クリック</span>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">事務局・職員室・教務</h3>
            <p class="text-sm text-gray-600">校長室・保健室など</p>
            <div class="hidden" data-details>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>事務局・教務室・校長室・保健室</li>
                    <li>会議室・応接室・ホール・ロビー</li>
                    <li>201, 202, 203, 204: 教室</li>
                    <li class="text-xs text-gray-500">書庫室・倉庫・喫煙所・エレベーター・外階段</li>
                </ul>
            </div>
        </button>

        <button type="button" class="group bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 text-left p-5"
                data-floor
                data-title="1F 詳細マップ"
                data-image="/images/KBC1階.png">
            <div class="flex items-center justify-between mb-3">
                <span class="text-xl font-bold text-red-600">1F</span>
                <span class="text-xs text-red-600 font-bold border border-red-200 bg-red-50 px-2 py-1 rounded-full">クリック</span>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">駐車場・エントランス</h3>
            <p class="text-sm text-gray-600">入口と共用設備</p>
            <div class="hidden" data-details>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li><span class="font-bold text-red-500">※禁煙※</span> 駐車場・駐輪場</li>
                    <li>倉庫・エレベーター・外階段</li>
                    <li class="text-xs text-gray-500">南側出口・壺川中公園（避難場所）方面</li>
                </ul>
            </div>
        </button>
    </div>

    <div id="map-modal-overlay" class="hidden fixed inset-0 bg-black/40 z-40"></div>
    <div id="map-modal" class="hidden fixed inset-0 z-50 items-center justify-center px-4">
        <div id="map-modal-panel" class="w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden transform transition duration-200 opacity-0 translate-y-4">
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <h3 id="map-modal-title" class="text-lg font-bold text-gray-800">詳細マップ</h3>
                <button type="button" id="map-modal-close" class="text-gray-400 hover:text-gray-700 text-2xl leading-none">&times;</button>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6">
                <div class="bg-gray-50 rounded-xl p-3">
                    <img id="map-modal-image" src="" alt="校舎マップ" class="w-full h-auto rounded-lg">
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-gray-500 mb-2">設備・教室</h4>
                    <div id="map-modal-details" class="text-gray-700"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            const overlay = document.getElementById('map-modal-overlay');
            const modal = document.getElementById('map-modal');
            const panel = document.getElementById('map-modal-panel');
            const closeButton = document.getElementById('map-modal-close');
            const title = document.getElementById('map-modal-title');
            const image = document.getElementById('map-modal-image');
            const details = document.getElementById('map-modal-details');

            function openModal(button) {
                title.textContent = button.dataset.title;
                image.src = button.dataset.image;
                const detailNode = button.querySelector('[data-details]');
                details.innerHTML = detailNode ? detailNode.innerHTML : '';

                overlay.classList.remove('hidden');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                requestAnimationFrame(() => {
                    panel.classList.remove('opacity-0', 'translate-y-4');
                    panel.classList.add('opacity-100', 'translate-y-0');
                });
            }

            function closeModal() {
                panel.classList.remove('opacity-100', 'translate-y-0');
                panel.classList.add('opacity-0', 'translate-y-4');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    overlay.classList.add('hidden');
                }, 200);
            }

            document.querySelectorAll('[data-floor]').forEach((button) => {
                button.addEventListener('click', () => openModal(button));
            });

            overlay.addEventListener('click', closeModal);
            closeButton.addEventListener('click', closeModal);
            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') {
                    closeModal();
                }
            });
        })();
    </script>
</x-layout>
