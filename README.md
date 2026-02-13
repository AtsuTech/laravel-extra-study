# Laravel 発展学習


### livewireはV3

## テスト
testsディレクトリの中

テストを実行するには下記を実行
```
php artisan test
```


## キューとジョブ

### 特定のキューをジョブに投入
名前をつけた特定のキューだけを発動するようなことができる
```
http://127.0.0.1:8000/myjob/on_queue/(数字)
```
にアクセスして奇数か偶数で特定のキューにジョブを投入
アクセスされた際、ジョブが投入され、DBのテーブルにデータが保存される
その後、下記のコマンド事項でテーブルに記録されたジョブが実行されるイメージ
```
php artisan queue:work --stop-when-empty --queue=(名前)
php artisan queue:work --stop-when-empty --queue=odd
```


ライブラリ
npm install prismjs


## イベント
https://laravel.com/docs/12.x/events#event-subscribers