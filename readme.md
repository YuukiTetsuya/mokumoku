# イメージ

このファイルの目的：イメージを言語化する

## どんなアプリケーションか？

- もくもく会の進行を手助けする
  - トップページを開くと、もくもく会進行の手順が出てきて、手順通りに行うことでもくもく会を簡単に進行できる
  - ファシリテータの手助けになる

### 課題感

- 自分がもくもく会の進行を行った所、予想以上に進行が大変だった
- そもそももくもく会の内容が思いつかない

### もくもく会の流れを確認する

1. 会場に人が集まる
2. ファシリテータがアジェンダを掲示、または発表する
3. ファシリテータが概要を説明する
4. 勉強を開始する
5. コンテンツ
   1. アイスブレイク
   2. LT
   3. 休憩
   4. お食事
   5. 意見公開
6. 終了
   1. 後片付け

### アプリケーションでは何ができる？

- フォームを作成し、以下の記入欄を作成する

- アジェンダ作成/共有
  - フォーム入力
    - タイトル
    - タイムスケジュール
      - コンテンツ
      - ルール
      - Wifi情報
        - SSID
        - パス
- LTスタートボタン
  - 個別出力ページからLT作成
    - タイトル
    - 内容
  - 個別出力ページからアクセス
  - 誰からスタート
  - ストップウォッチ

- 共有内容をメモする
  - 自分の内容

### 機能一覧

- フォーム
  - 記入欄
  - 出力ページ
    - 個別出力ページ
    - 全体出力ページ
      - ページネーション(10件以上)
    - 検索機能
      - 全体検索
  - 編集
    - 記入
    - 出力
  - 削除
    - 個別
    - 全体
- LT機能
  - LT作成
    - スタートボタン
    - ストップウォッチ
  - 
- 共有ボタン
  - SNS共有
  - Googleハングアウト

### ディレクトリ構成

- index.html
- app（本体）
  - Controller
    - Interface
      - MyInterFace.php
    - trait   
        - MyTrait.php
    - class
        - 親クラス.class
          - 子クラス.class
    - autoload.php
  - view
    - template
      - .tpl
  - utility
    - utility.php
- vendor(Composer動作ライブラリディレクトリ)
    - composer（Composer共通）
    - smarty（ライブラリ）
    - autoload.php(ライブラリ自動ロード)
- webroot（公開用ディレクトリ）
  - .htaccess
  - index.php
  - css
    - styles.css
  - js
    - index.js

### 開発環境

- LAMP環境
  - XAMPP
    - 言語
      - php 7.0.1
    - サーバー
      - Apache/2.4.18
    - RDBMS
      - MySQL 15.1
      - MariaDB osx10.6
- 機能環境
  - パッケージ管理
    - Composer
  - テンプレートエンジン
    - smarty
- バージョン管理
  - Git Flow