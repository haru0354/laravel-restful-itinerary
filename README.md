# Laravel RESTfulの旅程表アプリの概要

RESTful設計でのLaravelフルスタックの旅程表アプリです。

基礎学習した内容を元にアウトプットとして簡易的に短時間で制作しており、学習目的に制作しています。

以前に作成した、Next.jsの旅程表アプリ「trip-abroad-itinerary」を、LaravelのRESTful設計で作成をしています。

「Livewire」を使用した同様のアプリの作成もしています。

⇒ https://github.com/haru0354/laravel-livewire-itinerary.git　（Livewire版）

## 技術スタック

- PHP 8.2 / Laravel 10（バックエンド）
- Blade（テンプレートエンジン）
- Tailwind CSS（スタイリング）
- MySQL(DB)
- Laravel Breeze（認証）

## 主な機能

- 旅のしおりのCRUD
- 旅程表のCRUD
- メモのCRUD
- フォームバリデーション
- 各日付ごとに旅程を並び替えて表示
- 各旅程が同日の場合は日付を1度のみ表示
- 削除の際は確認のモーダル表示

複数の「旅のしおり」を作成することができ、ここに「京都旅行」「大阪旅行」など、作成できます。

各旅のしおりには「旅程」と「メモ」を追加することができ、円滑に旅行プランの作成をすることが可能です。

また、「帰宅日が出発日より前になっていないか？」「各項目は入力されているか？」など、フォームバリデーションでミスを防ぎます。

## アプリのサムネイル画像

|旅のしおり | メモの一覧 |
|-------|-------|
| ![旅のしおり](/public/image/laravel-restful-shiori.webp) | ![メモの一覧](/public/image/laravel-restful-memo.webp) |
| 旅程の一覧 | スマホ画面での表示 |
| ![旅程の一覧](/public/image/laravel-restful-ryoteihyou.webp) | ![スマホ画面での表示](/public/image/laravel-restful-sumaho.webp) |
| フォーム | フォームバリデーション |
| ![フォーム](/public/image/laravel-restful-form01.webp) | ![フォームバリデーション](/public/image/laravel-restful-form.webp) |

各サムネイル画像の仕様と実際のアプリは、今後、変更される可能性があります。

「リポジトリの公開日：2025/06/28」での最新のサムネイル画像となっています。

## セットアップ手順

1. リポジトリをクローン：

git clone https://github.com/haru0354/laravel-restful-itinerary.git

cd laravel-restful-itinerary

2. 依存関係をインストール：

composer install

npm install

3. 環境ファイルを設定：

cp .env.example .env

php artisan key:generate

4. データベースを準備：

php artisan migrate --seed

5. サーバーを起動：

npm run dev
php artisan serve

### コマンドの概要

| コマンド                     | 説明                                   |
| ---------------------------- | -------------------------------------- |
| `npm install`                | フロントエンドの依存関係をインストール |
| `composer install`           | PHP（Laravel）の依存関係をインストール |
| `php artisan key:generate`   | アプリケーションキーを生成             |
| `php artisan migrate --seed` | DB に初期データの挿入                  |
| `php artisan serve`          | Laravel のローカル開発サーバーを起動   |
| `npm run dev`                | フロントエンドのビルドと監視を開始     |

