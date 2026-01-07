# tailwind-first

## 環境構築

### Dockerビルド

1. git clone git@github.com:Takaaki39/tailwind-first.git
2. cd tailwind/
3. docker-compose up -d --build
   ※MySQLはOSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

### Laravel環境構築

1. docker-compose exec php bash
2. composer install
3. cp .env.example .env
4. php artisan key:generate
5. exit
6. ※windowsの場合 : sudo chmod -R 777 \*

## 使用技術(実行環境)

- php 8.1.33
- Laravel 8.83.29
- MySQL 8.0.26
- tailwindcss@3.4.19

## URL

- 開発環境：http://localhost/
