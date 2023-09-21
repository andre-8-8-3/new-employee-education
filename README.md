# 学習用リポジトリ

## ディレクトリ構成

```
├─docker                docker環境の関連のファイル
├─docs                  プログラム問題集
│   ├─javascript        Javascript 問題集
│   │ ├─step01          Javascript 基礎問題
│   │ ├─step02          Javascript DOM操作系問題
│   │ └─step03          Javascript 発展形
│   └─php               PHP 問題集
│     ├─step01          PHP 基礎問題
│     ├─step01          PHP 応用問題
│     ├─step03          PHP ソートアルゴリズム問題
│     ├─step04          PHP 探索アルゴリズム問題
│     ├─step05          PHP グラフ探索アルゴリズム問題
│     └─step06          PHP その他アルゴリズム問題
│ 
├─sample                プログラム問題のサンプル解答
│ 
├─src                   webのrootディレクトリ
│ ├─api                 問題に使うWEBAPIを返すプログラム
│ └─workbook            問題のプログラム実行環境
│ 
├─.env.example          環境変数のデフォルトのファイル
├─.gitignore            gitで管理しないファイルを指定するファイル    
├─docker-compose.yml    docker-composeファイル
└─README.md         
```

## 実行環境の準備

### dockerの構築

1. docker環境を準備してください
    - WindowsならばWSL2を有効にしておいてください。
    - Docker Desktop 等のインストール

2. 「.env.example」ファイルを複製して「.env」ファイルを作ってください。

3. コンテナイメージをBuildしてください。

```
$ docker-compose up --build
```

4. http://localhost:8080 にアクセスできればWEBサーバ成功です。

5. dockerコンテナ内に入る　※ bash環境のコマンドです

```
$ docker exec -it $(docker ps -a | grep web | awk '{print $1}') bash


6. コンテナ内からnodeを``node server.js``を実行

7. http://localhost:3000 にアクセスできればnodeの動作確認成功です。


### 環境

|          |      |
|----------|------|
| php      | 8.1  | 
| postgres | 11.7 |
| node     | 16.x |



### DB環境

.envファイルに記載されている
```
DB_DATABASE=test
DB_USERNAME=test
DB_PASSWORD=test
```
上記の値がそのままDBに使われます
MariaDBを使う場合はUser名はrootユーザーを使用してください


## Javascript 問題集

### STEP01

- [01.式問題.md](docs/javascript/step01/01.式問題.md)
- [02.条件分岐問題.md](docs/javascript/step01/02.条件分岐問題.md)
- [03.ループと反復問題１.md](docs/javascript/step01/03.ループと反復問題１.md)
- [04.ループと反復問題２.md](docs/javascript/step01/04.ループと反復問題２.md)
- [05.正規表現問題.md](docs/javascript/step01/05.正規表現問題.md)
- [06.最大平均最小問題.md](docs/javascript/step01/06.最大平均最小問題.md)
- [07.BMI指数問題.md](docs/javascript/step01/07.BMI指数問題.md)

### STEP02

- [01.クエリセレクタ問題.md](docs/javascript/step02/01.クエリセレクタ問題.md)
- [02.クリックイベントハンドラ問題.md](docs/javascript/step02/02.クリックイベントハンドラ問題.md)
- [03.API呼び出し問題.md](docs/javascript/step02/03.API呼び出し問題.md)
- [04.じゃんけん問題.md](docs/javascript/step02/04.じゃんけん問題.md)

### STEP03

- [01.Formのバリデーション問題.md](docs/javascript/step03/01.Formのバリデーション問題.md)
- [02.ガチャ問題.md](docs/javascript/step03/02.ガチャ問題.md)
- [03.API呼び出し問題２.md](docs/javascript/step03/03.API呼び出し問題２.md)
- [04.カレンダー作成問題.md](docs/javascript/step03/04.カレンダー作成問題.md)

## PHP 問題集

### STEP01

- [01.繰り返し問題.md](docs/php/step01/01.繰り返し問題.md)
- [02.条件分岐問題.md](docs/php/step01/02.条件分岐問題.md)
- [03.配列問題.md](docs/php/step01/03.配列問題.md)
- [04.配列検索問題.md](docs/php/step01/04.配列検索問題.md)
- [05.fizz&buzz問題.md](docs/php/step01/05.fizz&buzz問題.md)
- [06.最大平均最小問題.md](docs/php/step01/06.最大平均最小問題.md)
- [07.ファイル操作問題.md](docs/php/step01/07.ファイル操作問題.md)
- [08.入力フォーム問題.md](docs/php/step01/08.入力フォーム問題.md)
- [09.composer問題.md](docs/php/step01/09.composer問題.md)
- [10.オブジェクト問題.md](docs/php/step01/10.オブジェクト問題.md)
- [11.インターフェース問題.md](docs/php/step01/11.インターフェース問題.md)
- [12.マジックメソッド問題.md](docs/php/step01/12.マジックメソッド問題.md)


### STEP02

- [01.データベース問題１.md](docs/php/step02/01.データベース問題１.md)
- [02.データベース問題２.md](docs/php/step02/02.データベース問題２.md)
- [03.ログイン機能問題.md](docs/php/step02/03.ログイン機能問題.md)

### STEP03

- [01.バブルソート問題.md](docs/php/step03/01.バブルソート問題.md)
- [02.選択ソート問題.md](docs/php/step03/02.選択ソート問題.md)
- [03.挿入ソート.md](docs/php/step03/03.挿入ソート.md)
- [04.ヒープソート.md](docs/php/step03/04.ヒープソート.md)
- [05.マージソート.md](docs/php/step03/05.マージソート.md)
- [06.クイックソート.md](docs/php/step03/06.クイックソート.md)

### STEP04

- [01.線形探索問題.md](docs/php/step04/01.線形探索問題.md)
- [02.二分探索問題.md](docs/php/step04/02.二分探索問題.md)

### STEP05

- [01.幅優先探索問題.md](docs/php/step05/01.幅優先探索問題.md)
- [02.深さ優先探索.md](docs/php/step05/02.深さ優先探索.md)
- [03.ベルマンーフォード法探索問題.md](docs/php/step05/03.ベルマンーフォード法探索問題.md)
- [04.ダイクストラ法問題.md](docs/php/step05/04.ダイクストラ法問題.md)

### STEP06

- [01.ユークリッドの互除法(最大公約数).md](docs/php/step06/01.ユークリッドの互除法(最大公約数).md)
- [02.ハノイの塔問題.md](docs/php/step06/02.ハノイの塔問題.md)



