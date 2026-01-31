<?php
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;

//オリジナルのテスト


uses(RefreshDatabase::class);

test('book_model_function_test', function () {
    // 1. 【準備・実行】 本を作成してデータベースに保存する
    $book = Book::create([
        'title'  => 'Test Book',
        'author' => 'Test Author',
        'price'  => 100,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // 2. 【実行】 IDを使ってデータベースから取得し直す
    $createdBook = Book::find($book->id);

    // 3. 【検証】 ちゃんと取得できたか？ データは合っているか？
    $this->assertNotNull($createdBook); // 中身が空じゃないよね？
    $this->assertEquals('Test Book', $createdBook->title); // タイトルは 'Test Book' だよね？
});