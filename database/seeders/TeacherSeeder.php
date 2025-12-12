<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        // 重複を防ぐために一度テーブルを空にする（開発用）
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Teacher::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $teachers = [
            // --- 1枚目の写真 ---
            [
                'name' => '宇地原 里香',
                'subject' => 'セキュリティ演習 / 卒業研究',
                'image_path' => 'teachers/ujihara.jpg',
                'message' => 'セキュリティの基礎から応用まで、しっかり学びましょう。',
            ],
            // --- 2枚目の写真 ---
            [
                'name' => '大城 全揮',
                'subject' => '仮想化概論(AWS) / ネットワーク(CCNA)',
                'image_path' => 'teachers/oshiro_z.jpg',
                'message' => 'クラウド技術とネットワークはインフラの要です。',
            ],
            [
                'name' => '赤嶺 達也',
                'subject' => 'プログラム言語 / Web開発実習',
                'image_path' => 'teachers/akamine.jpg',
                'message' => '手を動かしてコードを書く楽しさを伝えたいです。',
            ],
            [
                'name' => '長嶺 博紀',
                'subject' => 'プログラム設計 / 志学',
                'image_path' => 'teachers/nagamine.jpg',
                'message' => '設計の考え方はプログラミング以外にも役立ちます。',
            ],
            [
                'name' => '渡具知 斉',
                'subject' => 'コンピュータ概論 / ITリテラシー',
                'image_path' => 'teachers/toguchi.jpg',
                'message' => 'コンピュータの基礎を固めて、応用力を養いましょう。',
            ],
            // --- 3枚目の写真 ---
            [
                'name' => '喜友名 航',
                'subject' => 'プログラミング言語 / ITリテラシー',
                'image_path' => 'teachers/kiyuna.jpg',
                'message' => '初心者でも分かりやすい授業を心がけています。',
            ],
            [
                'name' => '今頭 翔太',
                'subject' => 'データベース入門 / Web開発実習(PHP)',
                'image_path' => 'teachers/imato.jpg',
                'message' => 'データとWebの連携技術を身につけましょう。',
            ],
            [
                'name' => '福士 とよみ',
                'subject' => 'セキュリティ入門 / プログラミング言語',
                'image_path' => 'teachers/fukushi.jpg',
                'message' => '安全なシステム作りはこれからの必須スキルです。',
            ],
            [
                'name' => '中村 響',
                'subject' => 'ログ分析 / 卒業研究',
                'image_path' => 'teachers/nakamura.jpg',
                'message' => 'データから見えてくる真実を分析しましょう。',
            ],
            // --- 4枚目の写真 ---
            [
                'name' => '伊禮 利一',
                'subject' => 'プログラミング言語 / コンピュータ概論',
                'image_path' => 'teachers/irei.jpg',
                'message' => '論理的思考力をプログラミングを通じて鍛えます。',
            ],
            [
                'name' => '大城 政邦',
                'subject' => '機械学習 / データベース入門',
                'image_path' => 'teachers/oshiro_m.jpg',
                'message' => 'AIとデータの力で新しい価値を創造しましょう。',
            ],
            [
                'name' => '山川 こゆき',
                'subject' => 'システム構築技術',
                'image_path' => 'teachers/yamakawa.jpg',
                'message' => '安定したシステムを構築する技術を学びます。',
            ],
            [
                'name' => '赤羽 利夫',
                'subject' => '就職実務 / 志学(こころざしがく)',
                'image_path' => 'teachers/akabane.jpg',
                'message' => '技術だけでなく、社会人としての心構えも大切です。',
            ],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}