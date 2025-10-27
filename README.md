# もぎたて

Laravelを使用して作成した商品管理アプリです。  
商品の登録、編集、削除、一覧表示、詳細表示ができます。

## Dockerビルド
1. git clone
2. docker-compose up -d  --build

## 使用技術
- Laravel 10
- PHP 8.2
- MySQL

## 機能
- 商品の一覧表示
- 商品の詳細表示
- 商品の新規登録
- 商品の編集
- 商品の削除

## laravel環境構築
1. docker-compose exec php bash  
2. composer install  
3. .env.example ファイルから `.env` ファイルを作成し、環境変数を設定  
4. php artisan key:generate  
5. php artisan migrate  
6. php artisan db:seed

## URL
- 開発環境：http://localhost/products 
- phpMyAdmin：http://localhost:8080

---
