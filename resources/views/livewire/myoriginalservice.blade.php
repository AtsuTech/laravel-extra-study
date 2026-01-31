<div>
    <h1>自作のサービス</h1>
    <p>{{ $msg }}</p>
    <ul>
        @foreach ($data as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
