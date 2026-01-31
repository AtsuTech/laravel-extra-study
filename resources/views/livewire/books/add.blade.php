
    <div>
        <h1>本を追加しします</h1>

        <form action="{{ route('books.store') }}" method="post">
            @csrf
            <input type="text" name="title" placeholder="タイトル">
            <input type="text" name="author" placeholder="著者">
            <input type="text" name="price" placeholder="価格">
            <button type="submit">追加</button>
        </form>
    </div>

