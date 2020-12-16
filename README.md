# b-girl-sns 
<p align="center">
<img width="80%" alt="スクリーンショット 2020-12-16 18 43 17" src="https://user-images.githubusercontent.com/69893922/102341962-efe3bf00-3fdb-11eb-9b3d-f8297b692e0a.png" >
</p>


## :ribbon: 開発環境 Dev

- mac OS Catalina バージョン10.15.7

- PHP 7.3.11

- Laravel Framework 6.20.7

- vue 2.6.12 

- Visual Studio Code 1.52 


##  :ribbon: App URL

### **http://b-girl-sns.herokuapp.com/**  

## :ribbon: どういうものか

- 文系女子が気楽に使える可愛い色のSNSです。思い思いにあった事を画像付きで書き込めます。

## :ribbon: 構造

- :cherry_blossom: ユーザー新規登録・ログイン機能

グーグルAPIを利用して新規登録、ログイン可能。メールアドレス、パスワード（２回入力）で登録します。パスワードをメールアドレスを介して再設定可能です(Sendgridを利用しています)。

<p align="center">
<img width="60%" alt="スクリーンショット 2020-12-16 20 21 42" src="https://user-images.githubusercontent.com/69893922/102342265-59fc6400-3fdc-11eb-869f-b1ff553b7b19.png" width=40%>
</p>

- :cherry_blossom: 記事投稿機能

タイトルとテキスト、画像一枚を投稿できます。画像はS3にアップロードしています。

<p align="center">
<img width="60%" alt="スクリーンショット 2020-12-16 20 30 01" src="https://user-images.githubusercontent.com/69893922/102343135-8369bf80-3fdd-11eb-8551-d1dbf9598d16.png">
</p>

- :cherry_blossom: 記事編集・削除機能

記事内容を編集して更新でき、また記事を削除できます。

<p align="center">
<img width="60%" alt="スクリーンショット 2020-12-16 21 10 24" src="https://user-images.githubusercontent.com/69893922/102347026-296bf880-3fe3-11eb-9146-d600fccdeb9b.png">
</p>


- :cherry_blossom: タグ機能

VueとBladeを介してタグを登録できます。タグをクリックすると同じ記事を並べられます。

<p align="center">
<img width="60%" alt="スクリーンショット 2020-12-16 20 37 53" src="https://user-images.githubusercontent.com/69893922/102344015-a0eb5900-3fde-11eb-97fa-d83afa0a463a.png">
</p>

- :cherry_blossom: いいね機能

VueとBladeを介してBootstrapのアニメーションと共にいいねが付けられます。クリックすると同じ記事を並べられます。

<p align="center">
<img width="60%" alt="スクリーンショット 2020-12-16 21 11 51" src="https://user-images.githubusercontent.com/69893922/102347173-5b7d5a80-3fe3-11eb-8ea9-1ae6302f3214.png">
</p>


- :cherry_blossom: フォロー・フォロワー機能

投稿者をクリックして遷移するフォローボタンからフォローができます。フォロー・フォロワー数をクリックすると一覧を並べられます。

<p align="center">
<img width="60%" alt="スクリーンショット 2020-12-16 21 13 24" src="https://user-images.githubusercontent.com/69893922/102347322-97b0bb00-3fe3-11eb-8313-281be386c31f.png">
</p>



## :ribbon: 構築方法 Usage

```
$ git clone https://github.com/shivonnu/b-girl-sns.git
$ composer install
.envファイルの設定
$ php artisan key:generate
$ php artisan migrate
//ローカル環境のブラウザにてhttp://localhost:8080へアクセス
```

## :fireworks: 写真素材

https://girlydrop.com/ GIRLY DROP（ガーリードロップ）



