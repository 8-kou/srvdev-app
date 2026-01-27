# 校内ポータル (srvdev-app)

学科の学生・教員向け校内ポータル。  
掲示板、先生紹介、年間スケジュール、校内地図を提供します。

## 主な機能
- トップページ（最新投稿）
- 校内地図（モーダルで階層詳細）
- 先生紹介（カード＋クリックで浮き上がり）
- 年間スケジュール（一覧＋カレンダー）
- 掲示板（一覧・詳細・返信・いいね）
- 管理者ページ（ログイン・先生/投稿/スケジュール管理）

## 技術スタック
- Laravel 11.47.0 / PHP 8.4
- MySQL
- Docker / Docker Compose（Laravel Sail）
- Apache
- Tailwind CSS

## 必要環境
- Docker / Docker Compose
- Node.js / npm（フロント資産ビルド用）

## セットアップ
1) 依存関係をインストール
```
composer install
npm install
```

2) 環境設定
```
sail artisan key:generate
```

3) コンテナ起動
```
docker compose up -d --build
```

4) DB初期化
```
sail artisan migrate
```

5) 画像ストレージリンク（先生紹介画像用）
```
sail artisan storage:link
```

6) フロントビルド
```
sail npm run dev
```

## ページ一覧
- `/` トップ
- `/map` 校内地図
- `/teachers` 先生紹介
- `/schedules` 年間スケジュール
- `/posts` 掲示板

## 背景動画
各ページごとに `public/videos/` 配下の動画を使用します。
- `home.mp4`
- `posts.mp4`
- `schedule.mp4`
- `teachers.mp4`
- `map.mp4`

## DB構成（概要）
### posts
- author_name, title, content, category, is_published, parent_id

### teachers
- name, subject, image_path, message, sort_order, header_color

### schedules
- title, event_date, description

## ディレクトリ（主要）
```
resources/views
├── components
├── home.blade.php
├── map.blade.php
├── teachers
├── schedules
└── posts
```
