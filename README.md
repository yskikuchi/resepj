# プロジェクト名
Rese（リーズ）

## 概要
Reseグループの飲食店予約サービスです。

## 機能一覧
### ユーザー
* 会員登録・ログイン
* 飲食店一覧を表示
  * ジャンル・エリア・店名で絞り込み
* お気に入り登録・削除
* 予約機能
  * 日時・人数を指定して予約
  * 予約の削除
  * 予約の変更
* 訪れた飲食店の評価機能

### 店舗代表者
* 店舗情報の作成・更新
* 店舗の予約確認
* 店舗画像の追加

### 管理者
* 上記店舗代表者の機能
* 店舗代表者の作成

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
$ cd resepj-api
$ composer install
$ cp .env.local.example .env

$ php artisan key:generate
```

envファイルのデータベースを修正後
```
$ php artisan migrate
$ php artisan db:seed
```

### 2. Nuxt
```
$ cd ../
$ cd rese-nuxtpj
$ yarn install

$ cp .env.local.example .env
```


### 4.laravel & Nuxtを立ち上げる
```
php artisan serve
yarn dev
```



