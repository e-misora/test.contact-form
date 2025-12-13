# contact-form

## 環境構築

- リポジトリをクローン  
  git clone git@github.com:e-misora/test.contact-form.git
- docker のビルド 起動  
  docker-compose up -d --build
- Laravel パッケージのインストール  
  composer install
- 環境変数を設定  
  cp .env.example .env  
  .env ファイルを編集して必要な値を設定
- マイグレーション実行  
  php artisan migrate
- シーディング実行  
  php artisan db:seed

## 使用技術（実行環境）

- php:
- Laravel:
- MySQL:8.0.26
- nginx:1.21.1

## URL

- お問い合わせフォーム  
  http://localhost
- ユーザー登録画面  
  http://localhost/register
