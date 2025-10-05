# Flea-Market

## 環境構築
- docker-compose exec php bash
- composer install
- 「.env.example」ファイルを 「.env」ファイルに命名を変更。
- .envの環境変数を変更
- アプリケーションキーの作成
php artisan key:generate

- マイグレーションの実行
php artisan migrate

- シーディングの実行
php artisan db:seed

- シンボリックリンク作成
php artisan storage:link

## 使用技術(実行環境)
- PHP 8.4.4
- Laravel 8.83.29
- MySQL 8.0.41

## テーブル設計
![alt](table_1.png)
![alt](table_3.png)

## ER図
![alt]("![Uploading スクリーンショット 2025-10-05 223609.png…]()
")

## URL
- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/
