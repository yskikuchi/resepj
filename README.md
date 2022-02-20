# プロジェクト名
Rese（リーズ）

## 概要
Reseグループの飲食店予約サービスです。

## 機能一覧
* 会員登録・ログイン
* 飲食店一覧を表示
  * ジャンル・エリア・店名で絞り込み
* お気に入り登録・削除
* 予約機能
  * 日時・人数を指定して予約
  * 予約の削除
  * 予約の変更
* 訪れた飲食店の評価機能

## 環境
* PHP 7.4.26
* laravel 8.81.0
* Nodejs v14.18.0
* Nuxt v2.15.8
* MySQL 5.7.34

## インストール

```
git clone https://github.com/yskikuchi/resepj.git
cd resepj
```
### 1. laravel
```
cd resepj-api
composer install
$ cp .env.example .env

$ php artisan key:generate
```
.envに以下を追加
```
SESSION_DOMAIN=localhost
```

### 2. Nuxt
```
cd rese-nuxtpj
yarn add or npm install 
```
rese-nuxtpj直下に.envを作成し、以下を記述
```
API_URL=http://localhost:8000
```

### 3.データベースの設定後
```
php artisan migrate
php artisan db:seed
```

### 4.laravel & Nuxtを立ち上げる
```
php artisan serve
yarn dev or npm run dev
```


