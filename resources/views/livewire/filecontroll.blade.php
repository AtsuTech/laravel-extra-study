<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <h1 class="bg-slate-300 text-2xl p-2">ファイルの扱い</h1>

    <div class="border border-black rounded-md p-2 bg-amber-200 my-3">
        <p>ファイルの情報</p>
        <ul>
            <li>ファイルのURL: {{ $file_path }}</li>
            <li>ファイルのサイズ: {{ $size }}</li>
            <li>ファイルの更新日時: {{ $modified }}</li>
        </ul>        
    </div>    
    
    @foreach($data as $d)
        <p>{{ $d }}</p>
    @endforeach

    <div class="flex space-x-2 w-[600px] border border-black rounded-md p-2 fixed bottom-20 mx-auto left-0 right-0">
        <input type="text" wire:model.live="input" placeholder="何か入力" variant="primary" class="block w-[500px] border border-amber-50 bg-gray-300 rounded-md p-2" />
        <flux:button variant="primary" type="submit" class="w-[100px]" wire:click="write_file">
            +内容追加
        </flux:button>
    </div>

</div>
