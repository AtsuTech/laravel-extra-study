<div>
    <h1 class="text-2xl font-bold">本の一覧</h1>
    <flux:link href="{{ route('books.add') }}" variant="primary" class="w-full">
        追加
    </flux:link>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
</div>