<div>
    {{-- Stop trying to control. --}}
    <h1 class="text-2xl font-bold">ミドルウェア確認ページ</h1>
    <div class="p-2 bg-gray-100 rounded-md">
        <a href="/middleware/false" class="text-blue-500 block">ミドルウェアを使用しないページ</a>
        <a href="/middleware/true" class="text-blue-500 block">ミドルウェアを使用するページ</a>
    </div>
    {{-- <a href="{{ route('middleware.false') }}">ミドルウェアを使用しないページ</a> --}}
    {{-- <a href="{{ route('middleware.true') }}">ミドルウェアを使用するページ</a> --}}
        @foreach ($data as $key => $value)
            <p>{{ $key }}: {{ $value }}</p>
        @endforeach

</div>
